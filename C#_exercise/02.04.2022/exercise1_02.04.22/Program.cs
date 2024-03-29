﻿using System;
using System.IO;

namespace exercise_02._04._22
{
    class Program
    {

        static void Main(string[] args)
        {
            //Put a route to a file
            string fileRoute = "";

            if(!File.Exists(fileRoute))
            {
                CreateFile(fileRoute);
            }
            else
            {
                PuttingTheData(fileRoute);
            }
            
        }

        static void CreateFile(string route)
        {
            File.Create(route);
        }

        static void PuttingTheData(string route)
        {
            Console.WriteLine("Give a name");
            string name = Console.ReadLine();
            Console.WriteLine("Give a surname");
            string surname = Console.ReadLine();
            Console.WriteLine("Give telephone number");
            string phoneNumber = Console.ReadLine();
            int convertToInt = Convert.ToInt32(phoneNumber);

            int index = 0;
            using (StreamReader streamReader = new StreamReader(route))
            {
                string actualLine = streamReader.ReadLine();
                while (actualLine != null)
                {
                    index++;
                    actualLine = streamReader.ReadLine();
                }
            }

            using (StreamWriter streamWriter = new StreamWriter(route, true))
            {
                streamWriter.WriteLine($"{index}. {name} {surname} {convertToInt}");
            }
        }
    }
}
