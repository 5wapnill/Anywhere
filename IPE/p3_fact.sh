
echo "enter any number"
read x
fact=1

for((i=1; i<=x; i++))
  do
    fact=$((fact*i))
  done
  
echo "factorial of $x = $fact"

