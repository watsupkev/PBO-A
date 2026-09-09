public class KarakterGame {
    private String nama;
    private int hp;
    private int giliran;

    public KarakterGame(String nama, int hp) {

        if (hp < 0) {
            throw new IllegalArgumentException(
                    "HP tidak boleh kurang dari 0");
        }

        this.nama = nama;
        this.hp = hp;
        this.giliran = 0;
    }

    public void serang(int damage) {

        if (damage <= 0) {
            throw new IllegalArgumentException(
                    "Damage harus lebih dari 0");
        }

        System.out.println(
                nama + " menyerang dengan damage " + damage);
    }

    public void giliran() {
        giliran++;

        System.out.println(
                "Giliran ke-" + giliran);
    }

    public void tampilkan() {
        System.out.println("Nama    : " + nama);
        System.out.println("HP      : " + hp);
        System.out.println("Giliran : " + giliran);
    }
}