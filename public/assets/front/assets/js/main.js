
    function PrintDiv(html2pdf) {
        var divToPrint = document.getElementsByClassName(html2pdf)[0];
        var popupWin = window.open('', '_blank', 'left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="assets/css/vendor.min.css" rel="stylesheet" /><link href="assets/css/style.css" rel="stylesheet" /></head><body onload="window.print()" dir="ltr">' 
        + divToPrint.innerHTML + '</body></html>');
        popupWin.document.close();
    }


    
