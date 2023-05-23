using System;

namespace exercise_26._03._22
{
    class Program
    {
        static void Main(string[] args)
        {
            
            //Loops();

            string text = "asdfg";

            for(int i = 0; i < text.Length; i++)
            {
                char sign = text[i];
                if(sign == 'a')
                {
                    //Interpolation
                    Console.WriteLine($"Sign no. {i} is {text[i]}");
                }
                
            }

            Console.WriteLine("Three characters cut from index 1: " + text.Substring(1, 3));

            string text0 = "    xxx    ";
            Console.WriteLine("Text received from the user: ");
            Console.WriteLine(text0);
            Console.WriteLine("Trimed text: ");
            Console.WriteLine(text0.Trim());

            Console.WriteLine("Change of signs");
            Console.WriteLine(text0);
            Console.WriteLine(text0.Replace("x", "y"));


            int? nullableNumber = null;
            int number = 10;
            Console.WriteLine($"Null number: {nullableNumber}, normal number {number}");
            
        }

        static void Loops()
        {
            //Loops
            /*
            int counter = 0;
            while (counter < 3)
            {
                FunctionName();
                counter++;
            }

            do
            {
                FunctionName();
            } while (false);
            */

            int[] ageTable = new int[4];
            for (int i = 0; i < ageTable.Length; i++)
            {
                int returnedAge = FunctionName();
                ageTable[i] = returnedAge;
            }

            Console.WriteLine("Value of and index: " + ageTable[0]);
            Console.WriteLine("Value of an index 1: " + ageTable[1]);
            Console.WriteLine("Value of an index 2: " + ageTable[2]);
            Console.WriteLine("Value of an index 3: " + ageTable[3]);
            Console.WriteLine("The END");
        }

        static int FunctionName()
        {

            //Name stuff
            string text = "Give a name:";
            Console.WriteLine(text);
            string name = Console.ReadLine();
            Console.WriteLine("Name: " + name);

            //Age stuff
            Console.WriteLine("Give an age:");
            string age = Console.ReadLine();
            int x = 10;
            int ageToNumber = Convert.ToInt32(age);
            try
            {
                Console.Write("Your age + 10 equals: " + (ageToNumber + x));
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
                Console.WriteLine("You didn't inputted a number");
            }
        
            //If statement with age
            Console.WriteLine("\nIs your above the 20s? ");
            if (ageToNumber > 20)
            {
                Console.WriteLine("Yeaahh!");
            }
            else if (ageToNumber == 20)
            {
                Console.WriteLine("You're close, 20");

            }
            else
            {
                Console.WriteLine("Na-ah");
            }
            Console.Clear();
            return ageToNumber;
        }
    }
}
