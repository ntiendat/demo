#include<iostream>
#include<cmath>
using namespace std;
long long N , H;
int gen(long long gio , long long sl){
	if(gio>H){
		return sl;
	}
	else{
		if(gio%2 != 0){
			return gen(gio+1,floor(sl*2));
			
		}
		else{
			return gen(gio+1,floor(sl*0.75));
		}
	}
}
int main(){
	cin >> N;
	cin >> H;
	cout<<gen(1,N);
	
}