import java.util.ArrayList;

public class Main {
    public static void main(String[] args)
    {
        ArrayList<Staff> staffs = new ArrayList<Staff>();
        Developer dev1 = new Developer("John Doe",35000, 20, 500);
        staffs.add(dev1);
        Developer dev2 = new Developer("Marry Ann",35000, 10, 300);
        staffs.add(dev2);
        CEO ceo1 = new CEO("Elon Musk", 150000, 4, 20000);
        staffs.add(ceo1);
        Marketing marketing1 = new Marketing("Sara Wong",30000,2,500);
        staffs.add(marketing1);

        int totalPayment = 0;
        for (Staff staff : staffs) {
            System.out.println(staff.getName() + " = " + staff.getPayment());
            totalPayment += staff.getPayment();
        }
        System.out.println("Total Payment: " + totalPayment);
    }
}