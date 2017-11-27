/** 
 * Will swap two table entries 
 * @param a - name of first player
 * @param b - name of second player
*/
function swapEntries(a, b)
{
	var editor = $("#" + a);  //put your ids here
      	var viewer = $("#" + b);

	editorContent = editor.clone();
    	viewerContent = viewer.clone();

 	editor.replaceWith(viewerContent);
    	viewer.replaceWith(editorContent);
}

/** 
 * Will swap two array cells
 * @param ar - array
 * @param a - first cell's index
 * @param b - second cell's index
*/
function swap(ar, a, b)
{
	var temp = ar[a];
	ar[a] = ar[b];
	ar[b] = temp;
}

/**
 * Quicksort.
 * @param a - The array to be sorted.
 * @param first - The start of the sequence to be sorted.
 * @param last - The end of the sequence to be sorted.
 * @param names - Array of names.
*/
function quickSort( a, first, last, names ) 
{
    var pivotElement;
    if(first < last)
    {
        pivotElement = pivot(a, first, last, names);
        quickSort(a, first, pivotElement-1, names);
        quickSort(a, pivotElement+1, last, names);
    }
}
 
/**
 * Find and return the index of pivot element.
 * @param a - The array.
 * @param first - The start of the sequence.
 * @param last - The end of the sequence.
 * @param names - Array of names.
 * @return - the pivot element.
*/
function  pivot( a, first, last) 
{
    var p = first;
    var pivotElement = a[first];
 
    for(var  i = first+1 ; i <= last ; i++)
    {
        if(a[i] > pivotElement)
        {
            p++;
            swap(a, i, p);
			swapEntries(names[i], names[p]);
			swap(names, i, p);
        }
    }
 
    swap(a, p, first);
    swapEntries(names[p], names[first]);
    swap(names, p, first);
 
    return p;
}