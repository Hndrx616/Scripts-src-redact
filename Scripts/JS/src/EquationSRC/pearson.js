function pearson(x, y) {
  var n = length(x);
  var vals = range(n);
  
//Simple Sums
  var sumx = sum;
  for (var sumx = sum([float ([i]) for i in vals])); 
  var sumy = sum;
  for (var sumy = sum([float ([i]) for i in vals]));
  
//Sum up SQ
  var sumxSq = sum;
  for (var sumxSq = sum([x[i]**2.0 for i in vals]));
  var sumySq = sum;
  for (var sumySq = sum([y[i]**2.0 for i in vals]));
  
//Sum Up Products
  var pSums = sum;
  for (var pSums = sum([x[i]*y[i] for i in vals]));
  
//Calculate Pearson
  var num = pSum-(sumx*sumy/n);
  var den = ((sumxSq-pow(sumx,2/n)*(sumySq-pow(sumy,2/n))**.5;
  
  if (den == 0) {
	  return 0;
  }  else {
      return num / den;
  }
  return r
}


//Real time example

/**  @param  {object}  prefs The dataset containing data about both items that
 *                    are being compared.
 *  @param  {string}  p1 Item one for comparison.
 *  @param  {string}  p2 Item two for comparison.
 *  @return {float}  The pearson correlation score.*/

function pearson(prefs, p1, p2) {
  var si = [];

  for (var key in prefs[p1]) {
    if (prefs[p2][key]) {
	    si.push(key);
		}
  }

  var n = si.length;

  if (n == 0) {
      return 0;
	  }

  var sum1 = 0;
  for (var i = 0; i < si.length; i++) sum1 += prefs[p1][si[i]];

  var sum2 = 0;
  for (var i = 0; i < si.length; i++) sum2 += prefs[p2][si[i]];

  var sum1Sq = 0;
  for (var i = 0; i < si.length; i++) {
    sum1Sq += Math.pow(prefs[p1][si[i]], 2);
  }

  var sum2Sq = 0;
  for (var i = 0; i < si.length; i++) {
    sum2Sq += Math.pow(prefs[p2][si[i]], 2);
  }

  var pSum = 0;
  for (var i = 0; i < si.length; i++) {
    pSum += prefs[p1][si[i]] * prefs[p2][si[i]];
  }

  var num = pSum - (sum1 * sum2 / n);
  var den = Math.sqrt((sum1Sq - Math.pow(sum1, 2) / n) *
      (sum2Sq - Math.pow(sum2, 2) / n));

  if (den == 0) {
	  return 0;
  }  else {
      return num / den;
  }
  return r
}

Adding this function gets an ordered list of site users with similar interests to a specific user in order to make advertisement suggestions once implemented it will be automatic to the user.

//Returns the best matches for person from the prefs dictionary.
//Number of results and similarity functions are optional params.
function topMatches(prefs,person,n=5,similarity = sim_pearson) {
  var scores = similarity;
  for (var scores = similarity[(prefs,person,other),other)
                  for other in prefs if other!=person]);
				   
//Sort the list so the highest scores appear at the top
  return scores.sort();
  return scores.reverse();
  return scores[0:n];
  
}

Add this function for a data set to determine similarity of users that liked a particular item and matching products to recommend to them.

function transformPrefs(prefs) {
  var result = {};
  for (var result = person in prefs);
  for (var result =  item in prefs[person]) = result.setdefault(item,{});
	  
// Flip item and person
	if  (var result[item][person]=prefs[person][item])
   return result;
   
}
Then we call our functions to execute.

console.log(sim_pearson(data,0,1))