using System;

namespace Mazda
{
    class Program
    {
        static void Main(string[] args)
        {
            double Types;
            double Specs;
            bool Variant = true;

            while (Variant)
            {
                Console.WriteLine("Enter Variant Car");
                Console.WriteLine("");
                Console.WriteLine("1 = Mazda BT-50");
                Console.WriteLine("2 = Mazda 3 Sedan");
                Console.WriteLine("3 = Mazda CX-5");
                Console.WriteLine("4 = Mazda CX-30");
                Console.WriteLine("5 = Mazda 6");
                Console.WriteLine("6 = Mazda MX-5 Soft top");
                Console.WriteLine("7 = Mazda MX-5 RF");
                Console.WriteLine("0 = Leave");
                Console.WriteLine("-----------------");
                Types = Convert.ToDouble(Console.ReadLine());
                Console.WriteLine("-----------------");


                if (Types == 1)
                {
                    Console.WriteLine("Mazda BT-50");
                    Console.WriteLine("Enter the Price of Variant Specs");
                    Console.WriteLine("1 = 1350000 / 2.2L 4x2 6MT");
                    Console.WriteLine("2 = 1395000 / 2.2L 4x2 6AT");
                    Console.WriteLine("3 = 1550000 / 3.2L 4x4 6AT");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)

                    {
                        break;
                    }
                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 2198 cc");
                            Console.WriteLine("Power: 148 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 2198 cc");
                            Console.WriteLine("Power: 148 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 3:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 3198 cc");
                            Console.WriteLine("Power: 197 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;

                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 2)
                {
                    Console.WriteLine("Mazda 3 Sedan");
                    Console.WriteLine("Enter the price of Variant Specs");
                    Console.WriteLine("1 = 1295000 / 1.5L Elite");
                    Console.WriteLine("2 = 1495000 / 2.0L Premium");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)
                    {
                        break;
                    }
                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1496 cc");
                            Console.WriteLine("Power: 109 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 152 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;

                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 3)
                {
                    Console.WriteLine("Mazda CX-5");
                    Console.WriteLine("Enter the price of Variant Specs");
                    Console.WriteLine("1 = 2350000 / 2.2L Sport Diesel AWD");
                    Console.WriteLine("2 = 1730000 / 2.0L pro 2WD");
                    Console.WriteLine("3 = 1890000 / 2.0L 2WD Sport");
                    Console.WriteLine("4 = 1990000 / 2.5L AWD Sport");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)
                    {
                        break;
                    }
                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 2191 cc");
                            Console.WriteLine("Power: 187 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 154 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 3:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 154 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 4:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 2488 cc");
                            Console.WriteLine("Power: 187 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;

                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 4)
                {
                    Console.WriteLine("Mazda CX-30");
                    Console.WriteLine("Enter the price of Variant Specs");
                    Console.WriteLine("1 = 1490000 / 2WD Pro");
                    Console.WriteLine("2 = 1890000 / 2WD Sport");
                    Console.WriteLine("3 = 1990000 / AWD Sport");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)
                    {
                        break;
                    }


                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 152 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 152 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 3:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 152 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;

                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 5)
                {
                    Console.WriteLine("Mazda 6");
                    Console.WriteLine("Enter the price of Variant Specs");
                    Console.WriteLine("1 = 2250000 / skyActiv-G 2.5L Turbo");
                    Console.WriteLine("2 = 2250000 / SkyActic-D 2.2L");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)
                    {
                        break;
                    }
                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 2488 cc");
                            Console.WriteLine("Power: 228 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 5 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 2191 cc");
                            Console.WriteLine("Power: 187 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;

                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 6)
                {
                    Console.WriteLine("Mazda MX-5 Soft top");
                    Console.WriteLine("Enter the price of Variant Specs");
                    Console.WriteLine("1 = 2130000 / SkyActiv 2.0L MT");
                    Console.WriteLine("2 = 2190000 / SkyActiv 2.0L AT");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)
                    {
                        break;
                    }
                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 2198 cc");
                            Console.WriteLine("Power: 148 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 181 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;

                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 7)
                {
                    Console.WriteLine("Mazda MX-5 RF");
                    Console.WriteLine("Enter the price of Variant Specs");
                    Console.WriteLine("1 = 2290000 / SkyActiv 2.0L MT");
                    Console.WriteLine("2 = 2360000 / SkyActiv 2.0L AT");
                    Console.WriteLine("3 = 2690000 / SkyActiv 2.0L AT Club Edition");
                    Console.WriteLine("4 = 2390000 / MT Anniversary Edition");
                    Console.WriteLine("5 = 2480000 / AT Anniversary Edition");
                    Console.WriteLine("0 = Leave Choice Seats");
                    Console.WriteLine("-----------------");
                    Specs = Convert.ToDouble(Console.ReadLine());
                    Console.WriteLine("-----------------");
                    if (Specs == 0)
                    {
                        break;
                    }
                    switch (Specs)
                    {
                        case 1:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 181 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 2:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 181 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 3:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 181 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 4:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Manual");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 181 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        case 5:
                            Console.WriteLine("Seating: 2 Seats");
                            Console.WriteLine("Transmission Type: Automatic");
                            Console.WriteLine("Engine: 1998 cc");
                            Console.WriteLine("Power: 181 hp");
                            Console.WriteLine("-----------------");
                            Variant = false;
                            break;
                        default:
                            Console.Clear();
                            Console.WriteLine("Invalid");
                            Console.WriteLine("-----------------");
                            break;
                    }
                }
                else if (Types == 0)
                {
                    break;
                }
                else
                {
                    Console.Clear();
                    Console.WriteLine("Invalid");
                    Console.WriteLine("-----------------");
                }
            }
        }
    }
}
