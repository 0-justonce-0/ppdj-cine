        var text = [];
        var seats = document.getElementsByClassName('seat');
        var str = document.getElementById("hideinfo").innerHTML;
        var bookedArray = str.split(",");
        $(document).ready(function () {
            $('.booked').attr('disabled', true);
            $('.thisishidden').hide();
            $(".seat").click(function () {
                if (this.classList.contains('seat') && !this.classList.contains('occupied') && !this.classList.contains('selected')) {
                    this.classList.toggle('selected');
                    text.push(this.value);
                    text.sort();
                    $('.display-val').text(text);
                    $('.beforesend').val(text);
                    $('.selected-val').text(text);
                } else if (this.classList.contains('seat') && this.classList.contains('selected')) {
                    this.classList.toggle('selected');
                    var temp = [];
                    for (let i = 0; i < text.length; i++) {
                        if (text[i] !== this.value) {
                            temp.push(text[i]);
                        }
                    }
                    text = temp;
                    text.sort();
                    $('.display-val').text(text);
                    $('.beforesend').val(text);
                    $('.selected-val').text(text);
                }
            });
            $('.booknow').click(function() {
                $('.booking-part').hide();
                $('.payment-part').show();
                $('.payment-info').hide();
            });
        });
