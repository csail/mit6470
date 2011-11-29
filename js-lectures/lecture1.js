var my_array = [3, 1, 4, 1, 5, 9];
var evens = [];

for (var i = 0; i < my_array.length; i++) {
	var num = my_array[i];
	if (num % 2 == 0) {
		evens.push(num);
	}
}
