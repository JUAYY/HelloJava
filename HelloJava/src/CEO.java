public class CEO extends Staff {
    private int experience;
    private int experienceRate;

    public CEO(String name, int salary, int experience, int experienceRate) {
        super(name, salary);
        this.experience = experience;
        this.experienceRate = experienceRate;
    }

    public int getExperience() {
        return experience;
    }

    public void setExperience(int experience) {
        this.experience = experience;
    }

    public int getExperienceRate() {
        return experienceRate;
    }

    public void setExperienceRate(int experienceRate) {
        this.experienceRate = experienceRate;
    }

    @Override
    int getPayment() {
        return this.salary + (this.experience * this.experienceRate);
    }
}
