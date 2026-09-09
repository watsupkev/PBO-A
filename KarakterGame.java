public class KarakterGame {
    private String nama;
    private int hp;
    private int level;

    public KarakterGame(String nama, int hp, int level) {

        if (hp < 0) {
            throw new IllegalArgumentException(
                    "HP tidak boleh kurang dari 0");
        }

        if (level < 1) {
            throw new IllegalArgumentException(
                    "Level tidak boleh kurang dari 1");
        }

        this.nama = nama;
        this.hp = hp;
        this.level = level;
    }

    public void serang(int damage) {

        if (damage <= 0) {
            throw new IllegalArgumentException(
                    "Damage harus lebih dari 0");
        }

        System.out.println(
                nama + " menyerang dengan damage " + damage);
    }

    public void terimaDamage(int damage) {

        if (damage <= 0) {
            throw new IllegalArgumentException(
                    "Damage harus lebih dari 0");
        }

        hp -= damage;

        if (hp < 0) {
            hp = 0;
        }
    }

    public void tampilkan() {
        System.out.println("Nama  : " + nama);
        System.out.println("HP    : " + hp);
        System.out.println("Level : " + level);
    }
}