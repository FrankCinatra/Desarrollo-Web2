package Diagnostico;
import java.util.*;
class alcancia{
    public static void main(String[] args) {
        agregar();
    }
    public static void agregar(){
        Dinero alcancia = new Dinero();
        Scanner sc = new Scanner(System.in);
        System.out.println("Que le gustaría agregar?");
        System.out.println("Monedas  (1, 2, 5 o 10)                  - Presione 1");
        System.out.println("Billetes (20, 50, 100, 200, 500, 1000)   - Presione 2");
        System.out.println("Salir                                    - Presione 3");
        int menu = sc.nextInt();

        do{
            if(menu == 1){
                insertCoins(sc, alcancia);
            }else if(menu == 2){
                insertBills(sc, alcancia);
            }else{
                System.out.println("Favor de ingresar un numero válido");
            }
            System.out.println("Quiere agregar una moneda/billete de nuevo? 1-SI   2-NO");
            menu = sc.nextInt();
            if(menu==1){agregar();}
            else menu=3;
        }while(menu != 3);
        System.out.println(alcancia.devuelvedinero());
    }
    public static void insertCoins(Scanner sc, Dinero money){
        System.out.println("Ingresar la moneda a agregar (1,2,5 o 10)");
        int moneda = sc.nextInt();

        switch(moneda){
            case 1:
                money.setMxn1();
                break;
            case 2:
                money.setMxn2();
                break;
            case 5:
                money.setMxn5();
                break;
            case 10:
                money.setMxn10();
                break;
            default:
                System.out.println("Ingrese un valor válido");
            break;
        }
        
        System.out.println("Quiere agregar otra moneda? Si/No");
        String opcion = sc.nextLine();
        if(opcion=="SI"||opcion=="Si"||opcion=="si"||opcion=="sI"){insertCoins(sc, money);}

    }
    public static void insertBills(Scanner sc, Dinero money){
        System.out.println("Ingresar el billete a agregar (20,50,100,200,500 o 1000)");
        int bill = sc.nextInt();

        switch(bill){
            case 20:
                money.setBill20();
                break;
            case 50:
                money.setBill50();
                break;
            case 100:
                money.setBill100();
                break;
            case 200:
                money.setBill200();
                break;
            case 500:
                money.setBill500();
                break;
            case 1000:
                money.setBill1000();
                break;
            default:
                System.out.println("Ingrese un valor válido");
            break;
        }

        System.out.println("Quiere agregar otro billete? Si/No");
        String opcion = sc.nextLine();
        if(opcion=="SI"||opcion=="Si"||opcion=="si"||opcion=="sI"){insertBills(sc, money);}
    }
}