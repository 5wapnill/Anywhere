echo "enter the number"
read num
y=0
tmp=$num

while [ $tmp -gt 0 ]
do
	x=$((tmp%10))
	y=$(($y+x*x*x))
	tmp=$((tmp/10))
done

if [ $num -eq $y ]
then
echo "$num is palindrome"
else
echo "$num is not palindrome"
fi
