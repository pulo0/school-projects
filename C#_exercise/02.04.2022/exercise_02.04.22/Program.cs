using System;
using System.IO;

namespace exercise_02._04._22
{
    class Program
    {
        static void Main(string[] args)
        {
            //Put a route to a file
            string route = "";

            Console.WriteLine("OLD FILE");
            ReadingFromAFile(route);
            RewriteFile(route, "new text");
            Console.WriteLine("NEW FILE");
            ReadingFromAFile(route);
        }

        static void ReadingFromAFile(string route)
        {
            StreamReader streamReader = new StreamReader(route);
            string lineWrittenFromFile = streamReader.ReadLine();

            int lineNumber = 1;

            while (lineWrittenFromFile != null)
            {
                Console.WriteLine($"Line Number: {lineNumber} : {lineWrittenFromFile}");
                lineNumber++;
            }
            Console.WriteLine("Press any key to release a file");
            Console.ReadKey();
            streamReader.Dispose();
            Console.WriteLine("File released");
            Console.ReadKey();
        }

        static void RewriteFile(string route, string text)
        {
            StreamWriter streamWriter = new StreamWriter(route, true);
            streamWriter.WriteLine(text);
            streamWriter.Dispose();
        }
    }
}
