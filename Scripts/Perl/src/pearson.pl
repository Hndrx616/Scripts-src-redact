## Pearson Correlation Coefficient
#!perl

use strict;
use warnings;

sub pearson {
	my ($n) = $len(x);
	my ($vals) = $range($n);
#!Simple Sums
	my ($sumx) = $sum([float ([i]) for i in vals]);
	my ($sumy) = $sum([float ([i]) for i in vals]);
#!Sum up SQ;
	my ($sumxSq) = $sum([x[i]**2.0 for i in vals]);
	my ($sumySq) = $sum([y[i]**2.0 for i in vals]);
#!Sum Up Products
	my ($pSums) = $sum([x[i]*y[i]] for i in vals]);
#!Calculate Pearson
	my ($num) = $pSum-($sumx*$sumy/$n);
	my ($den) =(($sumxSq-pow($sumx,2/$n)*($sumySq-pow($sumy,2/$n))**.5;
	if ($den = 0) {
		return 1;
	}
	my ($r) = $num / $den;
	return ($r);
}


use strict;
use warnings;
 
#Take our data table from the Start
$row1 = [ 1, 2, 1 ];
$row2 = [ 0, 1, 0 ];
$row3 = [ 0, -1 ];
my $x = [$row1, $row2, $row3];

for (my $i=1;$i<11;++$i){
   for (my $j=1;$j<3;++$j){
      $x->[$i][$j]= $i;
   }
}

 
my $sim_pearson = sim_pearson($x);

print "$sim_pearson\n";

for (my $i = 1; $i < scalar(@{$x}); ++$i){
   my $line_to_print = '';
   for (my $j = 1; $j < scalar(@{$x->[$i]}); ++$j){
      $line_to_print .= "$x->[$i]->[$j]\t";
   }
   $line_to_print =~ s/\t$//;
   print "$line_to_print\n";
}
 
sub mean {
   my ($x)=@_;
   my $num = scalar(@{$x}) - 1;
   my $sum_x = '0';
   my $sum_y = '0';
   for (my $i = 1; $i < scalar(@{$x}); ++$i){
      $sum_x += $x->[$i][1];
      $sum_y += $x->[$i][2];
   }
   my $mu_x = $sum_x / $num;
   my $mu_y = $sum_y / $num;
   return($mu_x,$mu_y);
}
 
#sum of squared deviations to the mean
sub ss {
   my ($x,$mean_x,$mean_y,$one,$two)=@_;
   my $sum = '0';
   for (my $i=1;$i<scalar(@{$x});++$i){
     $sum += ($x->[$i][$one]-$mean_x)*($x->[$i][$two]-$mean_y);
   }
   return $sum;
}
 
sub sim_pearson {
   my ($x) = @_;
   my ($mean_x,$mean_y) = mean($x);
   my $ssxx=ss($x,$mean_x,$mean_y,1,1);
   my $ssyy=ss($x,$mean_x,$mean_y,2,2);
   my $ssxy=ss($x,$mean_x,$mean_y,1,2);
   my $correlation=correlation($ssxx,$ssyy,$ssxy);
   my $xcorrelation=sprintf("%.4f",$correlation);
   return($xcorrelation);
 
}
 
sub correlation {
   my($ssxx,$ssyy,$ssxy)=@_;
   my $sign=$ssxy/abs($ssxy);
   my $correlation=$sign*sqrt($ssxy*$ssxy/($ssxx*$ssyy));
   return $correlation;
}



## Real time Example

sub correlation {
   my ($x) = @_;
   my ($mean_x,$mean_y) = mean($x);
   my $ssxx=ss($x,$mean_x,$mean_y,1,1);
   my $ssyy=ss($x,$mean_x,$mean_y,2,2);
   my $ssxy=ss($x,$mean_x,$mean_y,1,2);
   my $correl=correl($ssxx,$ssyy,$ssxy);
   my $xcorrel=sprintf("%.4f",$correl);
   return($xcorrel);
}
sub correl {
   my($ssxx,$ssyy,$ssxy)=@_;
   my $sign=$ssxy/abs($ssxy);
   my $correl=$sign*sqrt($ssxy*$ssxy/($ssxx*$ssyy));
   return $correl;
}




#!/usr/bin/perl
 
use strict;
use warnings;
 
#make up some matrix for demonstration purposes
my $x = [];
#generate 10 row
for (my $i=1;$i<11;++$i){
   #generate 2 columns, where column 1 = $i and column 2 = $i
   for (my $j=1;$j<3;++$j){
      $x->[$i][$j]= $i;
   }
}
#end matrix code
 
my $correlation = correlation($x);
#Since the values in the columns are identical in $x, the correlation will be 1
print "$correlation\n";
 
#to use this code, remove the matrix code above
#generate an anonymous 2D array where $x->[1] is the row
#$x->[1][1] is the value in row 1 column 1 and $x->[1][2] is the value of row 1 column 2
#once you build the entire array, pass it to the correlation subroutine as above
#my $corrleation = correlation($x)
 
#if you want to see what's inside $x use the code below
#for (my $i = 1; $i < scalar(@{$x}); ++$i){
#   my $line_to_print = '';
#   for (my $j = 1; $j < scalar(@{$x->[$i]}); ++$j){
#      $line_to_print .= "$x->[$i]->[$j]\t";
#   }
#   $line_to_print =~ s/\t$//;
#   print "$line_to_print\n";
#}
 
sub mean {
   my ($x)=@_;
   my $num = scalar(@{$x}) - 1;
   my $sum_x = '0';
   my $sum_y = '0';
   for (my $i = 1; $i < scalar(@{$x}); ++$i){
      $sum_x += $x->[$i][1];
      $sum_y += $x->[$i][2];
   }
   my $mu_x = $sum_x / $num;
   my $mu_y = $sum_y / $num;
   return($mu_x,$mu_y);
}
 
### ss = sum of squared deviations to the mean
sub ss {
   my ($x,$mean_x,$mean_y,$one,$two)=@_;
   my $sum = '0';
   for (my $i=1;$i<scalar(@{$x});++$i){
     $sum += ($x->[$i][$one]-$mean_x)*($x->[$i][$two]-$mean_y);
   }
   return $sum;
}
 
sub correlation {
   my ($x) = @_;
   my ($mean_x,$mean_y) = mean($x);
   my $ssxx=ss($x,$mean_x,$mean_y,1,1);
   my $ssyy=ss($x,$mean_x,$mean_y,2,2);
   my $ssxy=ss($x,$mean_x,$mean_y,1,2);
   my $correl=correl($ssxx,$ssyy,$ssxy);
   my $xcorrel=sprintf("%.4f",$correl);
   return($xcorrel);
 
}
 
sub correl {
   my($ssxx,$ssyy,$ssxy)=@_;
   my $sign=$ssxy/abs($ssxy);
   my $correl=$sign*sqrt($ssxy*$ssxy/($ssxx*$ssyy));
   return $correl;
}