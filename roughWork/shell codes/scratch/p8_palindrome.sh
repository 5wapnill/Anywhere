echo "enter the number"
read num

rev=0
temp=$num

while [ $num -gt 0 ]
do
	a=$((num%10))
	rev=$((rev*10+a))
	num=$((num/10))
done

if [ $rev -eq $temp ]
then
echo "$rev is palindrome"
else
echo "$rev is not palindrome"
fi

