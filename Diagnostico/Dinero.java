package Diagnostico;

public class Dinero{
    private int mxn1, mxn2, mxn5, mxn10;
    private int bill20, bill50, bill100, bill200, bill500, bill1000;
    Dinero(){
        this.mxn1 = 0;
        this.mxn2 = 0;
        this.mxn5 = 0;
        this.mxn10 = 0;
        this.bill20 = 0;
        this.bill50 = 0;
        this.bill100 = 0;
        this.bill200 = 0;
        this.bill500 = 0;
        this.bill1000 = 0;
    }

    String devuelvedinero(){
        int suma = this.mxn1 + (this.mxn2*2) + (this.mxn5*5) + (this.mxn10*10) +
            (this.bill20*20) + (this.bill50*50) + (this.bill100*100) + (this.bill200*200) +
            (this.bill500*500) + (this.bill1000*1000);
        return "Ahorro: "+suma;

    }
    public void setMxn1() {
        this.mxn1 += 1;
    }
    public void setMxn2() {
        this.mxn2 += 1;
    }
    public void setMxn5() {
        this.mxn5 += 1;
    }
    public void setMxn10() {
        this.mxn10 += 1;
    }
    public void setBill20() {
        this.bill20 += 1;
    }
    public void setBill50() {
        this.bill50 += 1;
    }
    public void setBill100() {
        this.bill100 += 1;
    }
    public void setBill200() {
        this.bill200 += 1;
    }
    public void setBill500() {
        this.bill500 += 1;
    }
    public void setBill1000() {
        this.bill1000 += 1;
    }
}