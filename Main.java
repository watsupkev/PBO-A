public class Main {
    public static void main(String[] args) {

        KarakterGame hero = new KarakterGame(
                "Knight",
                100);

        hero.tampilkan();

        hero.serang(10);
        hero.giliran();

        System.out.println("\nSetelah giliran:");

        hero.tampilkan();

        System.out.println("\nPercobaan tidak sah 1:");

        try {
            hero.serang(-10);
        } catch (IllegalArgumentException e) {
            System.out.println("Ditolak: " + e.getMessage());
        }

        System.out.println("\nPercobaan tidak sah 2:");

        try {
            hero.serang(0);
        } catch (IllegalArgumentException e) {
            System.out.println("Ditolak: " + e.getMessage());
        }
    }
}