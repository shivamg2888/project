//http://www.spoj.com/submit/CODEIT03/
#include<iostream>
using namespace std;
char days[][30]={"Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"};
int solve(int d,int m,int y){
     static int t[] = {0, 3, 3, 6, 1, 4, 6, 2, 5, 0, 3, 5};
     int offset;
     int var=y/100;
     var=var%4;
     if(var==0){offset=6;}else if(var==1){offset=4;}else if(var==2){offset=2;}else{offset=0;}
     int lastTwo=y%100;
     lastTwo=(lastTwo+lastTwo/4)%7;
     if(y%4==0 && y%100!=0 || y%400==0){ if(m==1||m==2){ lastTwo=lastTwo-1; }}
       return (d+t[m-1]+lastTwo+offset)%7;
}
int main(){
    int t;
    int day,month,year;
    cin>>t;
    while(t--){
        cin>>day>>month>>year;
        cout<<days[solve(day,month,year)]<<endl;
    }
    return 0;
}
1> 3/2


float abs(int x,int y,float x){
	if(j>i){
		pf("incorrect");
	}
	// for the values of i and j
	//appply the 
	float glass[i*(i+1)/2];
	memset(glass,0,sizeof(glass));
	int index=0;
	glass[index]=x;
}
2> 2/3
20