using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace MyApplication
{
   
class Rotate1
{  
   static void lRotate3 (int a, int b, int c) 
      {
         int[] x = {a, b, c};
         Console.WriteLine("\nDefault: [{0}]", string.Join(", ", x));
         var var1 = x[0];
            for (var i = 0; i < x.Length - 1; i++)
            {
                x[i] = x[i + 1];
            }
            x[x.Length - 1] =var1;
            Console.WriteLine("\nAfter Rotation: [{0}]", string.Join(", ", x));
         
    } 
    
	static void Main()
    {
      Console.WriteLine("\nCall Rotate 1");
      lRotate3(5,7,9);
      
      Console.WriteLine("\nCall Rotate 2");
 	  lRotate3(6,2,1);
    }    
}
}
