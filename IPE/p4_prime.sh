echo "enter any number"
read num
prime=1

if [ $num -lt 4 ]
then
	prime=1
else

for((i=2; i<num; i++))
	do
		if [ $((num%i)) -eq 0 ]
		then
		prime=0
		fi
	done
fi

if [ $prime -eq 1 ]
then
	echo "$num is prime number"
else
	echo "$num is not prime number"
fi
