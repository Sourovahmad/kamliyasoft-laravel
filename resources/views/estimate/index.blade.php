<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Estimate you project | Kamliyasoft</title>
        <link rel="stylesheet" href="{{ asset('estimate/style.css') }}" />
 
    </head>
    <body>
        <nav>
            <div class="top">
                <img src="{{ asset('images/logo1.png') }}" alt=" " height="160px" width="160px" class="img-responsive logo"></i></span>
                <a href="{{ route("home") }}" class="back-btn">
                    <img
                        src="https://www.innoapps.com/assets/images/back-home.svg"
                        alt="back-btn"
                    />
                    <p>Back</p></a
                >
            </div>
            <ul class="stepper">
                <li class="active">
                    <p>Type</p>
                </li>
                <li class="">
                    <p>Scope</p>
                </li>
                <li>
                    <p>Date</p>
                </li>
                <li>
                    <p>Details</p>
                </li>
            </ul>
        </nav>
        <main>
            <div class="wrapper steps">
                <h4 class="title">What type of project are you building?</h4>
                <div class="steps container">
                    <div class="card">
                        <input
                            type="checkbox"
                            class="check"
                            data-id="Desktop"
                        />
                        <img
                            class="card-img not-selected"
                            src="{{ asset('estimate/assets/web-developement.svg') }}"
                            alt=""
                        />
                        <img
                            class="card-img selected"
                            src="{{ asset('estimate/assets/web-developement-clicked.svg') }}"
                            alt=""
                        />
                        <p>Web App</p>
                        <div class="check-box"></div>
                    </div>
                    <div class="card">
                        <input type="checkbox" class="check" data-id="Mobile" />
                        <img
                            class="card-img not-selected"
                            src="{{ asset('estimate/assets/mobile-app.svg') }}"
                            alt=""
                        />
                        <img
                            class="card-img selected"
                            src="{{ asset('estimate/assets/mobile-app-clicked.svg') }}"
                            alt=""
                        />
                        <p>Mobile</p>
                        <div class="check-box"></div>
                    </div>
                    <div class="card">
                        <input type="checkbox" class="check" data-id="Other" />
                        <img
                            class="card-img not-selected"
                            src="{{ asset('estimate/assets/other.svg') }}"
                            alt=""
                        />
                        <img
                            class="card-img selected"
                            src="{{ asset('estimate/assets/other-clicked.svg') }}"
                            alt=""
                        />
                        <p>Game</p>
                        <div class="check-box"></div>
                    </div>
                </div>
                <form class="form-control">
                    <div class="top">
                        <div>
                            <label for="">Name</label>
                            <input class="name" type="text" />
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input class="email" type="email" />
                        </div>
                        <div>
                            <label for="">Phone Number (Optional)</label>
                            <input class="phone" type="tel" />
                        </div>
                    </div>
                    <label for="">Project description</label>
                    <textarea type="text" class="description"></textarea>

                    <div class="condition">
                   
                        {{-- <p class="nda">
                            Upload Project Document
                            <label for="attach_nda">here</label>
                        </p> --}}
                        <input type="file" id="attach_nda" hidden />
                    </div>
                    <div class="form-btns">
                        <button type="button" class="btn form-prev">
                            Previous Step
                        </button>
                        <button class="btn form-submit">Estimate</button>
                    </div>
                </form>
                <div class="btns outer">
                    <button class="btn prev">Previous Step</button>
                    <button class="btn next" style="background-color: rgb(15, 143, 15)" disabled="true" >Continue</button>
                </div>
            </div>
        </main>

        {{-- <script src="{{ asset('estimate/script.js') }}" defer></script> --}}



        <form action="{{ route('estimate-projet-save') }}" method="POST" id="submitable_form" hidden>

            <input type="text" name="date" id="input_date">
            <input type="text" name="scope" id="input_scope">
            <input type="text" name="type" id="input_type">
         
            <input type="text" name="email" id="input_email">
            <input type="text" name="name" id="input_name">
            <input type="text" name="phone" id="input_phone">
            <input type="text" name="description" id="input_description">
        
        </form>


        <script src="{{ asset('js/sweetAlert.js') }}"></script>


        <script>

            const allStepperLi = document.querySelectorAll('.stepper li')
const nextBtn = document.querySelector('.btn.next')
const prevBtn = document.querySelector('.btn.prev')
const headerTitle = document.querySelector('.wrapper .title')
const cardImgsNotSelected = document.querySelectorAll(
    '.card .card-img.not-selected'
)
const cardImgsSelected = document.querySelectorAll('.card .card-img.selected')
const cardTexts = document.querySelectorAll('.card p')
const cardCheckBoxes = document.querySelectorAll('.card .check')

const stepsContainer = document.querySelector('.wrapper .steps')
const formContainer = document.querySelector('.wrapper .form-control')
const btnsContainer = document.querySelector('.wrapper .btns.outer')

const form = document.querySelector('.form-control')
const nameInp = document.querySelector('.form-control .name')
const emailInp = document.querySelector('.form-control .email')
const phoneInp = document.querySelector('.form-control .phone')
const descriptionInp = document.querySelector('.form-control .description')
const conditionCheckBox = document.querySelector(
    '.condition .accept .accept-condition'
)
const prevFormBtn = document.querySelector('.form-control .form-prev')
const submitFormBtn = document.querySelector('.form-control .form-submit')

let selected = 0
let data = {}

const typeData = {
    name: 'type',
    title: 'What type of project are you building?',
    imgs: {
        notSelected: [
            'estimate/assets/web-developement.svg',
            'estimate/assets/mobile-app.svg',
            'estimate/assets/other.svg',
        ],
        selected: [
            'estimate/assets/web-developement-clicked.svg',
            'estimate/assets/mobile-app-clicked.svg',
            'estimate/assets/other-clicked.svg',
        ],
    },
    texts: ['Desktop', 'Mobile', 'Game'],
}
const scopeData = {
    name: 'scope',
    title: 'What is the scope of your project?',
    imgs: {
        notSelected: [
            'estimate/assets/front-end.svg',
            'estimate/assets/backend.svg',
            'estimate/assets/design-estimate.svg',
        ],
        selected: [
            'estimate/assets/front-end-clicked.svg',
            'estimate/assets/back-end-clicked.svg',
            'estimate/assets/backend-design-clicked.svg',
        ],
    },
    texts: ['Front-End', 'Back-End', 'Design'],
}
const dateData = {
    name: 'date',
    title: 'How soon do you want us to start?',
    imgs: {
        notSelected: [
            'estimate/assets/now.svg',
            'estimate/assets/week.svg',
            'estimate/assets/month.svg',
        ],
        selected: [
            'estimate/assets/now-clicked.svg',
            'estimate/assets/week-clicked.svg',
            'estimate/assets/month-clicked.svg',
        ],
    },
    texts: ['Now', '1 Week', '1 Month'],
}

const cardData = [typeData, scopeData, dateData]

function setData() {
    const data = cardData[selected]

    headerTitle.textContent = data.title
    data.imgs.notSelected.forEach((url, index) => {
        cardImgsNotSelected[index].src = url
    })
    data.imgs.selected.forEach((url, index) => {
        cardImgsSelected[index].src = url
    })
    data.texts.forEach((t, i) => {
        cardTexts[i].textContent = t
    })
    cardCheckBoxes.forEach((c, i) => {
        c.setAttribute('data-id', data.texts[i])
    })
    setCardCheckBox()
}

function setCardCheckBox() {
    let selectedCard = cardData[selected]
    cardCheckBoxes.forEach((c) => (c.checked = false))
    if (data[selectedCard.name]) {
        Object.entries(data[selectedCard.name]).forEach(([index, value]) => {
            cardCheckBoxes.forEach((c) => {
                cardCheckBoxes[index].checked = true
            })
        })
    }
}

function goBack() {
    if (selected === 0) {
        allStepperLi[selected].classList.remove('done')
    } else {
        allStepperLi[selected].classList.remove('active')
        allStepperLi[selected].classList.remove('done')
        selected -= 1
    }
    allStepperLi[selected].classList.remove('done')

    if (selected === 0) {
        prevBtn.style.display = 'none'
    }
    if (selected !== allStepperLi.length - 1) {
        stepsContainer.style.display = 'flex'
        btnsContainer.style.display = 'block'
        formContainer.style.display = 'none'
        nextBtn.textContent = 'Continue'
    }
    setData();


    if (typeof data[cardData[selected]?.name] === 'undefined') {
        nextBtn.disabled = true;
    } else {
        nextBtn.disabled = false;
    }
}

function goNext() {



    allStepperLi[selected].classList.add('done')
    selected = selected === allStepperLi.length - 1 ? selected : (selected += 1)
    allStepperLi[selected].classList.add('active')

    if (selected > 0) {
        prevBtn.style.display = 'inline-block'
    }

    if (selected === allStepperLi.length - 1) {
        stepsContainer.style.display = 'none'
        formContainer.style.display = 'flex'
        headerTitle.textContent = 'Fill your contact details.'
        btnsContainer.style.display = 'none'
    } else {
        setData();
    }


    if (typeof data[cardData[selected]?.name] === 'undefined') {
        nextBtn.disabled = true;
    } else {
        nextBtn.disabled = false;
    }



    
}

cardCheckBoxes.forEach((c, index) => {
    c.addEventListener('change', (e) => {
        let dataFor = cardData[selected]
        let checkedBox = e.target.getAttribute('data-id')
        let isChecked = e.target.checked

        // For Date where user can select only one card
        if (selected === 2) {
            let tmpData = data[dataFor.name]
            if (tmpData) {
                if (Object.values(tmpData).length === 1) {
                    data[dataFor.name] = {}
                    setCardCheckBox()
                }
            }
        }

        // For Type where user can select only `Others` type of other than this
        // if (selected === 0) {
        //     if (checkedBox === 'Other') {
        //         data[dataFor.name] = {}
        //         setCardCheckBox()
        //     } else {
        //         if (data[dataFor.name]) {
        //             Object.values(data[dataFor.name]).forEach((c) => {
        //                 if (c === 'Other') {
        //                     data[dataFor.name] = {}
        //                     setCardCheckBox()
        //                 }
        //             })
        //         }
        //     }
        // }

        if (isChecked) {
            data[dataFor.name] = {
                ...data[dataFor.name],
                [index]: checkedBox,
            }
            setCardCheckBox()
        } else {
            delete data[dataFor.name][index]
        }

        formatData();

        if (Object.keys(data[dataFor.name]).length > 0) {
            nextBtn.disabled = false;
        } else {
            nextBtn.disabled = true;
        }
    })
})

nextBtn.addEventListener('click', goNext)
prevBtn.addEventListener('click', goBack)
prevFormBtn.addEventListener('click', goBack)
form.addEventListener('submit', handleFormSubmit)




function handleFormSubmit(e) {
    e.preventDefault()
    
    let name = nameInp.value
    let email = emailInp.value
    let phone = phoneInp.value
    let description = descriptionInp.value

    
    if (!name || !email || !description) return

    // use this data for the form submission - for data structure see the formatData function
    let finalData = formatData(name, email, phone, description)

    document.getElementById('input_date').value = finalData.data.date;
    document.getElementById('input_scope').value = finalData.data.scope;
    document.getElementById('input_type').value = finalData.data.type;
    document.getElementById('input_name').value = finalData.name;
    document.getElementById('input_email').value = finalData.email;
    document.getElementById('input_phone').value = finalData.phone;
    document.getElementById('input_description').value = finalData.description;

    document.getElementById('submitable_form').submit();
    
  
    
}

function confirmAndReload(){
    if (confirm("We Have Received The Request.We will Contact you Very soon")) {
        location.reload();
    }
}

function formatData(name, email, phone, description) {
    let dataKey = Object.keys(data)
    // this is how the data is being set
    let finalData = {
        name,
        email,
        phone,
        description,
        data: {
            type: [],
            scope: [],
            date: [],
        },
    }
    Object.values(data).forEach((d, index) => {
        Object.values(data[dataKey[index]]).forEach((v) => {
            finalData.data[dataKey[index]] = [
                ...finalData.data[dataKey[index]],
                v,
            ]
        })
    })

    return finalData
}

        </script>


    </body>



    <?php 
    if(!empty(session()->get('success'))){
    
    ?>
        
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Successfully Received Your Request. We will contact you Very soon',
    
    })
        </script>
      
    
    <?php       
    } else if(!empty(session()->get('fail'))){
    ?>
    <script> 
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!. Please Try Again',
    })
    
    </script>
    
    <?php    }   ?>
    
    




</html>
