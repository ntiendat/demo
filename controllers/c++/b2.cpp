

int main(){
int n;
cin>>n;
int a[n];
for(int i=0;i<n;i++){
	cin>>a[i];
}
sort(a,a+n);
int dem=0;
for(int i=0 ; i<n ; i++){
	for(int j=i+1 ;j<n;j++){
		int kc = a[j]-a[i];
		int tmp =a[j]+kc;
		bool check = true;
		for(int k=2 ;k<4;k++)
			if(find(a,a+n,tmp)-a<n) tmp+=kc;
			else check = false;
		if(check) dem++;
	
		
	}
	
}
cout<<dem;
}