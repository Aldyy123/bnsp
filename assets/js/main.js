const price = document.querySelector('span#price-ticket')

document.querySelector('.total').addEventListener('click', function(e) {
    const childPs = document.getElementById('child-ps')
    const adultPs = document.getElementById('adult-ps')
    const total = document.getElementById('total')
    const totalPrice = document.getElementById('total-price')
    e.preventDefault()

    if (!childPs.value && !adultPs.value) {
        alert('Penumpang kosong')
    } else {
        const totalPriceAdult = adultPs.value * price.textContent
        let totalPriceChild = childPs.value * price.textContent
        totalPriceChild = (50 / 100) * totalPriceChild
        totalPrice.value = totalPriceChild + totalPriceAdult
        total.textContent = totalPriceChild + totalPriceAdult
        console.log(totalPrice);
        console.log(total);
    }
})

const select = document.querySelector('.form-ticket select')
select.addEventListener('change', (e) => {

    const id = e.target.value
    $.ajax({
        url: '../controllers/ajax-request.php?id=' + id,
        success: function(data) {
            price.innerHTML = data
        }
    })

})