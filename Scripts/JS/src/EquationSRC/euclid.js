function euclidean(p,q){
  sumSq=0.0;
  
  // add up the squared differences
  for (var i = i in range(len(p))){
    sumSq+=(p[i]-q[i])**2
	}
  // take the square root
  return (sumSq**0.5)
}

// real life example
function sim_euclidean(prefs, person1, person2) {
  si = [];

  for (var key in prefs[person1]) {
    if (prefs[person2][key]) si.push(key);
  }

  if (si.length == 0) return 0;

  sum_of_squares = 0;

  for (var i = 0; i < si.length; i++) {
    key = si[i];
    sum_of_squares += Math.pow(prefs[person1][key] - prefs[person2][key], 2);
  }

  return 1.0 / (1 + Math.sqrt(sum_of_squares));
}

Then we can add this to our program to execute and get our score.