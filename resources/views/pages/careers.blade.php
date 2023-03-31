@extends('layout.main')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.con{
  width: 70vw;
  margin: auto;
  display: flex;
  justify-content: center
}
    .card {
        padding: 15px 20px;
	/* background: #fff; */
	box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  width: 90vw;
  max-width: 600px;
margin:1rem auto;
display: flex;
justify-content: center;
}
.details{
  display: none;
  transition: 2s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
  /* flex-direction: column */

}
.card-deck{
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: auto;
  /* align-items: center */
}
.card-deck span:after {
    font-family:Fontawesome;
    content:'expand details  \f078';
    float:right;
    font-size:13px;
    cursor: pointer;
    font-weight:300;
}
.card-deck span:hover {
  color:#041f2c ;
}
.card-deck span.active:after {
    font-family:Fontawesome;
    content:'hide details  \f077';
}
button{
    border: none;
    background-color:#08384f ;
    color: #ffff;
    padding: 5px 15px
}
button:hover{
     /* color: #565656; */
     background-color: #915e08;
   
}
button:focus{
border: none;
outline: none;
}
.modalCon{
    height:100vh ;
    width: 100vw;
    /* background-color: rgba(51, 51, 51, 0.319); */
    position: fixed;
    top: 0;
    display: flex;
    justify-content: center;
    align-content: center;
    display: none;
    z-index: 100;
}
.shadowOverlay{
    background-color: rgba(51, 51, 51, 0.414);
    height: 100vh;
    width: 100vw;
    position: absolute;
    top: 0;
    cursor: pointer;
}
.container.modalpop{
    background-color: #ffff;
    /* height: 80vh; */
    max-height: 800px;
    padding: 2rem 1rem;
   width: 600px;
    position: relative;
    margin: auto;
    animation: slide-in .3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 100;
 
}
@media (max-width: 768px) {
  .container.modalpop{
    width: 90vw;
    
  }
  .headerr{
    margin-bottom: 1rem !important;
    font-size: 20px;
  }
  input, textarea {
            border: none;
            background-color: #ebebeb;
            padding: 10px !important;
            margin: 10px auto !important ;
            width: 70vw !important;
          
          }
    .form-group.half{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
  }
}

form{

}
input, textarea {
            border: none;
            background-color: #ebebeb;
            padding: 10px;
            margin: 16px;
          
          }
input, textarea:focus {
              border: none;
              outline: none;
            }
@keyframes slide-in {
      0% {
      
        opacity: 0;
        transform:scale(.5);

      }
      100% {
        transform:scale(1);
        opacity: 1;
      }
    }
    @keyframes hide {
      0% {
      
        opacity: 1;

      }
      99%{
        opacity: 1;
      }
      100% {
        transform:scale(1);
        opacity: 0;
      }
    }
    .button {
            background-color: #08384f;
            color: #fff;
            padding: 13px;
            font-size: 14px;
            border: none;
            margin-left: 10px;
            cursor: pointer;
            
          }
    .button:hover{
     
              background-color: #915e08;
            
    }
    .form-group{
      display: flex;
      flex-direction: column
    }
    label{
      margin-left: 1.5rem;
      margin-top: 1rem;
    }
    .repsonsed{
      display: none;
     
    }
    .repsonsed.sent{
    
      height: 30px;
      justify-content: center;
      align-items: center;
      padding: 5px;
      background-color: #08384f;
      color: #fff;
      border-radius: 5px;
    }
    .card-deck a:hover{
      color: #000406
    }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span>
						<span>CAREERS <i class="fa fa-chevron-right"></i></span>
					</p>
					<h1 class="mb-3 bread">Careers</h1>
				</div>
			</div>
		</div>
	</section>
<section class="ftco-section careers-section">
<div class="container">

@if(empty($data))
<p class="responsed"></p>
@elseif($data==="sent")
<style>
  .repsonsed.sent{
    display: flex;
  }
</style>
<div class="responsed {{$data}}" style="  height: 40px;
  display: flex;
justify-content: center;
align-items: center;
padding: 5px;
background-color: #95da72;
color: #fff;
width:300px;
animation: hide 30s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
border-radius: 5px;" >
  Successfully sent your Application! 
 </div>
 @elseif($data==="error")
<style>
  .repsonsed.sent{
    display: flex;
  }
</style>
<div class="responsed {{$data}}" style="  height: 40px;
  display: flex;
justify-content: center;
align-items: center;
padding: 5px;
background-color: #dc5e5e;
color: #fff;
width:300px;
border-radius: 5px;
animation: hide 30s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;

" 

>
  An error occure please try again later! 
 </div>
 @elseif($data==="fileError")
<style>
  .repsonsed.sent{
    display: flex;
  }
</style>
<div class="responsed {{$data}}" style="  height: 40px;
  display: flex;
justify-content: center;
align-items: center;
padding: 5px;
background-color: #dc5e5e;
color: #fff;
width:300px;
border-radius: 5px;
animation: hide 30s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;

"

>
  Wrong file type, PDF files only!
 </div>
@endif
 
    {{-- <div class="container-fluid"> --}}
  <div class="con">
    <div class="card-deck" id="itemList"> 

      
    </div>
  </div>
{{-- </div> --}}
</div>
</section>
<div class="modalCon" id="popupdiv"><div class="shadowOverlay" id="popupclose">
    </div>
<div class="container modalpop"><div class="form">
  <h2 class="headerr" style="margin-bottom:2rem; text-align:center">Jumpstart your career with us!</h2>
<form action="{{route('careers')}}" onsubmit="preventDefault()"  method="POST" enctype='multipart/form-data' id="form">
@csrf
<div class="warn" id="warn">
  
</div>
  <div class="form-group half">
  
      <input
      name="user_firstname"
      type="text"
      placeholder="First Name"
      onChange=""
      id="fname" 
      required="true"
      />
      <input
      name="user_surname"
      type="text"
      placeholder="Surname"
      onChange=""
      id="sname" 
      required="true"
      />
      
    </div>
    <div class="form-group half">
      <input
      name="user_number"
      type="text"
      placeholder="Phone"
      onchange=""
      id="number" 
      required="true"
      />
      <input
      name="user_email"
      type="email"
      placeholder="Email"
      onChange=""
      id="email" 
      required="true"
      />
    </div>
    <div class="form-group">

      <label for="users">Submit your Resume here (PDF files only): </label>
      <input name="users" type="file" id="file"  accept="application/pdf" placeholder="Submit your Resume here" 
      required="true">
    </div>

    <input class="button" type="submit" value="Submit" id="submit" onclick="" >
  </form>
  </div></div>
</div>

<script>
  function submit() {    
    // document.getElementById('submit').style.pointer-events = 'none';
    $(document).ready(function () {

$("#my-form").submit(function (e) {

    $("#btn-submit").attr("disabled", true);

    return true;

});

});
      }
      
  function sendEmail(event) {
    
  const modal = document.getElementById('popupdiv');
    
  const fname= document.getElementById("fname").value;
  const sname= document.getElementById("sname").value;
  const email= document.getElementById("email").value;
  const number= document.getElementById("number").value;
  const file= document.getElementById("file").value;

     
        window.location.href = 'sendmail/sent';
      

    }
    

  
  
const itemList = document.getElementById('itemList');
  const items = [ 
  {
    name: 'PROJECT & BUSINESS DEVELOPMENT ASSISTANT',
 
    subItems: [
      "Conducts research work and initially prepares project feasibility studies including preliminary financial runs of potential projects, and organizes project presentations and negotiations",
      "Assists in land acquisition thru technical due diligence",
      "Participates in project planning and assists in project monitoring and ensures compliance to project timelines"
      
    ],
   
  },
  {
    name: 'PROJECT & BUSINESS DEVELOPMENT OFFICER',
  
    subItems: [
     "Thoroughly conducts research work and prepares project feasibility studies including financial runs of potential projects to be implemented by the Company, and prepares project presentations and negotiations",
     "Provides reliable information and guidance in the land acquisition by conducting technical due diligence",
     "Conducts project planning and ensures the accuracy of the Concept Design, Schematic Design, Design Development and Final Construction Drawings",
     "Implements strict project monitoring and ensures compliance to project timelines",
     "Secures necessary permits in the project implementation and handles legal documents with extreme care",
     "Acts as the Company’s representative in other external affairs related to the project such as community relations and government relations"
    ],
   
  },
  {
    name: 'MARKETING MANAGER',
  
    subItems: [
     "Knowledgeable in developing creative and strategic social media campaign that strengthen engagements",
     "Ample knowledge in paid ads, database marketing and website optimization",
     "Digital Marketing agency experience is a plus",
     "Develop and consolidate the marketing strategy for the company in line with the company objectives",
     "Coordinate marketing campaigns with sales activities and events",
     "Oversee the company’s marketing budget",
     "Facilitate creation and publication of all marketing materials in line with marketing plans",
     "Planning, developing, and implementing PR strategies",
     "Collating and analyzing media coverage"
    ],
   
  },  
  {
    name: 'MARKETING ASSISTANT',
  
    subItems: [
     "Help identify marketing trends and key opportunities for innovation",
     "Learning and working with various types of software for digital marketing",
     "Create marketing materials, such as white papers, case studies and presentations",
     "Maintaining a marketing database",
     "Provide administrative support to the marketing and sales team",
     "Perform in-depth research to identify new market opportunities, latest trend and information related to company",

    ],
   
  }
  ,  
  {
    name: 'LEASING ASSISTANT',
  
    subItems: [
     "Assist the Leasing Department in meeting with the prospective tenants and show the leasable properties and provide relevant information thereto",
     "Market vacant space to prospective tenants through advertisements or other methods",
     "Provide a timely, courteous and knowledgeable response to visitors or callers and handle their inquiries or direct them to the appropriate person according to their needs",
     "Receive and process future tenant’s applications and conduct background checks",
     "Implement a file tracking system for interoffice mail and other correspondence",

    ],
   
  }
  ,  
  {
    name: 'COMPLIANCE ASSISTANT',
  
    subItems: [
     "Assist the Legal Department in monitoring all submissions of compliance trackers and ensures that he/she calendars government statutory requirements",
     "Research on documentations and procedures of government agencies relating to permits, licenses, and other requirements for all real estate activities, programs, standards, and projects",
     "Assist in meetings/coordination with different government offices and agencies",
     "Assist in the preparation of compliance reports",
     "Implement a document tracking system/database for all compliance activities including correspondence",


    ],
   
  }
  ,  
  {
    name: 'ACCOUNTS PAYABLE (AP) SPECIALIST',
  
    subItems: [
     "Oversee accounts payable process, ensuring compliance with accounting guidance, company policies, and regulatory requirements.",
     "Develop, document, maintain, and perform necessary controls over departmental operations.",
     "Manage vendor and internal stakeholders’ relationships.",
     "Ensure disbursement policies and procedures are followed (controls, documentation, authorization).",
     "Provide the Treasury department with payment run funding requests and forecasts of future payment runs.",
     "Review policies and procedures of the Department and implementing process improvements.",

    ],
   
  },  
  {
    name: 'ACCOUNTS RECEIVABLE (AR) SPECIALIST',
  
    subItems: [
     "Preparation of invoices and statements to be promptly sent to clients and ensures that gathered data is correct, accurate and reliable.",
     "Ensure proper posting of payments made by clients. ",
     "Monitor aging of receivables and ensure that collections are made timely and past due accounts, if any, are properly coordinated with clients.",
     "Verifies validity of account discrepancies by obtaining and investigating information from sales, trade promotions, customer service departments, and from customers",
     "Accounts receivable reconciliation (Intercompany transactions, general ledger vs. subsidiary ledger reconciliation and etc.)",
     "Prepare monthly reports such as billing and collection monitoring, aging of receivables and TAT per client.",

    ],
   
  },  
  {
    name: 'BUSINESS OFFICE REPRESENTATIVE (Visayas)',
  
    subItems: [
     "Represent the Company in its transactions, prepare, submit, and claim the necessary documents before the concerned government agencies, companies, clients, and customers",
     "Review documentations and procedures of government offices and agencies relating to permits, licenses, and other requirements for all real estate activities, programs, standards, and projects",
     "Serve as the point of contact for different government offices, such as but not limited to local government units and offices, Securities and Exchange Commission, Bureau of Internal Revenue, Registry of Deeds, and other related government offices and agencies",
     "Prepare reports and shall proactively provide appropriate solutions and recommendations relating to his/her functions",

    ],
   
  },  
  {
    name: 'BUSINESS OFFICE REPRESENTATIVE (Mindanao)',
  
    subItems: [
     "Represent the Company in its transactions, prepare, submit, and claim the necessary documents before the concerned government agencies, companies, clients, and customers",
     "Review documentations and procedures of government offices and agencies relating to permits, licenses, and other requirements for all real estate activities, programs, standards, and projects",
     "Serve as the point of contact for different government offices, such as but not limited to local government units and offices, Securities and Exchange Commission, Bureau of Internal Revenue, Registry of Deeds, and other related government offices and agencies",
     "Prepare reports and shall proactively provide appropriate solutions and recommendations relating to his/her functions",
    

    ],
   
  },  
  {
    name: 'PROJECT ARCHITECT',
  
    subItems: [
     "Meeting with clients and stakeholders to discuss construction designs",
     "Acting as intermediary between client and the construction team",
     "Provide comprehensive review of Project plans and specifications",
     "Regular inspection of various Projects in terms of design and local government compliance in design and implementation",
     "Provide regular report to the Technical Services Group on status of assigned Projects",
    

    ],
   
  }
];

const listOrder = [
  {
    id:1,
    name:"PROJECT BUSINESS DEVELOPMENT",
    jobs:[
      {
        id:1,
    name: 'PROJECT & BUSINESS DEVELOPMENT ASSISTANT',
 
    subItems: [
      "Conducts research work and initially prepares project feasibility studies including preliminary financial runs of potential projects, and organizes project presentations and negotiations",
      "Assists in land acquisition thru technical due diligence",
      "Participates in project planning and assists in project monitoring and ensures compliance to project timelines"
      
    ],
   
  },
  {
    id:2,
    name: 'PROJECT & BUSINESS DEVELOPMENT OFFICER',
  
    subItems: [
     "Thoroughly conducts research work and prepares project feasibility studies including financial runs of potential projects to be implemented by the Company, and prepares project presentations and negotiations",
     "Provides reliable information and guidance in the land acquisition by conducting technical due diligence",
     "Conducts project planning and ensures the accuracy of the Concept Design, Schematic Design, Design Development and Final Construction Drawings",
     "Implements strict project monitoring and ensures compliance to project timelines",
     "Secures necessary permits in the project implementation and handles legal documents with extreme care",
     "Acts as the Company’s representative in other external affairs related to the project such as community relations and government relations"
    ],
   
  }
    ]
  },
  {
    id:1,
    name:"MARKETING",
    jobs:[
      {
    name: 'MARKETING MANAGER',
    id:1,
    subItems: [
     "Knowledgeable in developing creative and strategic social media campaign that strengthen engagements",
     "Ample knowledge in paid ads, database marketing and website optimization",
     "Digital Marketing agency experience is a plus",
     "Develop and consolidate the marketing strategy for the company in line with the company objectives",
     "Coordinate marketing campaigns with sales activities and events",
     "Oversee the company’s marketing budget",
     "Facilitate creation and publication of all marketing materials in line with marketing plans",
     "Planning, developing, and implementing PR strategies",
     "Collating and analyzing media coverage"
    ],
   
  },  
  {
    name: 'MARKETING ASSISTANT',
    id:2,
    subItems: [
     "Help identify marketing trends and key opportunities for innovation",
     "Learning and working with various types of software for digital marketing",
     "Create marketing materials, such as white papers, case studies and presentations",
     "Maintaining a marketing database",
     "Provide administrative support to the marketing and sales team",
     "Perform in-depth research to identify new market opportunities, latest trend and information related to company",

    ],
   
  }
    ]
  },
  {
    id:3,
    name:"LEASING",
    jobs:[
      {
    name: 'LEASING ASSISTANT',
    id:1,

    subItems: [
     "Assist the Leasing Department in meeting with the prospective tenants and show the leasable properties and provide relevant information thereto",
     "Market vacant space to prospective tenants through advertisements or other methods",
     "Provide a timely, courteous and knowledgeable response to visitors or callers and handle their inquiries or direct them to the appropriate person according to their needs",
     "Receive and process future tenant’s applications and conduct background checks",
     "Implement a file tracking system for interoffice mail and other correspondence",

    ],
   
  }
    ]
  },
  {
    id:4,
    name:"LEGAL",
    jobs:[
      {
    name: 'COMPLIANCE ASSISTANT',
        id:1,
    subItems: [
     "Assist the Legal Department in monitoring all submissions of compliance trackers and ensures that he/she calendars government statutory requirements",
     "Research on documentations and procedures of government agencies relating to permits, licenses, and other requirements for all real estate activities, programs, standards, and projects",
     "Assist in meetings/coordination with different government offices and agencies",
     "Assist in the preparation of compliance reports",
     "Implement a document tracking system/database for all compliance activities including correspondence",


    ],
   
  },{
    name: 'BUSINESS OFFICE REPRESENTATIVE (Visayas)',
    id:2,
  
    subItems: [
     "Represent the Company in its transactions, prepare, submit, and claim the necessary documents before the concerned government agencies, companies, clients, and customers",
     "Review documentations and procedures of government offices and agencies relating to permits, licenses, and other requirements for all real estate activities, programs, standards, and projects",
     "Serve as the point of contact for different government offices, such as but not limited to local government units and offices, Securities and Exchange Commission, Bureau of Internal Revenue, Registry of Deeds, and other related government offices and agencies",
     "Prepare reports and shall proactively provide appropriate solutions and recommendations relating to his/her functions",

    ],
   
  },  
  {
    name: 'BUSINESS OFFICE REPRESENTATIVE (Mindanao)',
    id:3,
    subItems: [
     "Represent the Company in its transactions, prepare, submit, and claim the necessary documents before the concerned government agencies, companies, clients, and customers",
     "Review documentations and procedures of government offices and agencies relating to permits, licenses, and other requirements for all real estate activities, programs, standards, and projects",
     "Serve as the point of contact for different government offices, such as but not limited to local government units and offices, Securities and Exchange Commission, Bureau of Internal Revenue, Registry of Deeds, and other related government offices and agencies",
     "Prepare reports and shall proactively provide appropriate solutions and recommendations relating to his/her functions",
    

    ],
   
  },  
    ]
  },
  {
    id:5,
    name:"FINANCE",
    jobs:[
      {
    name: 'ACCOUNTS PAYABLE (AP) SPECIALIST',
    id:1,
    subItems: [
     "Oversee accounts payable process, ensuring compliance with accounting guidance, company policies, and regulatory requirements.",
     "Develop, document, maintain, and perform necessary controls over departmental operations.",
     "Manage vendor and internal stakeholders’ relationships.",
     "Ensure disbursement policies and procedures are followed (controls, documentation, authorization).",
     "Provide the Treasury department with payment run funding requests and forecasts of future payment runs.",
     "Review policies and procedures of the Department and implementing process improvements.",

    ],
   
  },  
  {
    name: 'ACCOUNTS RECEIVABLE (AR) SPECIALIST',
    id:2,
    subItems: [
     "Preparation of invoices and statements to be promptly sent to clients and ensures that gathered data is correct, accurate and reliable.",
     "Ensure proper posting of payments made by clients. ",
     "Monitor aging of receivables and ensure that collections are made timely and past due accounts, if any, are properly coordinated with clients.",
     "Verifies validity of account discrepancies by obtaining and investigating information from sales, trade promotions, customer service departments, and from customers",
     "Accounts receivable reconciliation (Intercompany transactions, general ledger vs. subsidiary ledger reconciliation and etc.)",
     "Prepare monthly reports such as billing and collection monitoring, aging of receivables and TAT per client.",

    ],
   
  },  
    ]
  },
  {
    id:6,
    name:"CONSTRUCTION MANAGEMENT",
    jobs:[
      {
    name: 'PROJECT ARCHITECT',
    id:1,

    subItems: [
     "Meeting with clients and stakeholders to discuss construction designs",
     "Acting as intermediary between client and the construction team",
     "Provide comprehensive review of Project plans and specifications",
     "Regular inspection of various Projects in terms of design and local government compliance in design and implementation",
     "Provide regular report to the Technical Services Group on status of assigned Projects",  

    ],
   
  }
    ]
  }
]

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const product = urlParams.get('job')
const cat = urlParams.get('cat')


if(!cat && !product)
{
  for (const item of listOrder) {
  const modal = document.getElementById('popupdiv');
  const itemContainer = document.createElement('div');
  itemContainer.innerHTML = `
  <h3 style="margin:20px auto !important; color:#08384f;">${item.name}</h3>
          `;
          for (const subItem of item.jobs) {
            const subItemContainer = document.createElement('div');
            subItemContainer.innerHTML = `
           
              <a href="{{ url('careers?cat=${item.name}&job=${subItem.id}') }}" style="font-size:16px !important; color:#565656 ">${subItem.name}</a>
            `;
            itemContainer.appendChild(subItemContainer);
       
          }

        itemList.appendChild(itemContainer);
        }

        
      }else if(cat&&product){

        const cate = listOrder.find(o=>o.name===cat)
        const job = cate.jobs.find(o=>o.id===parseInt(product))

        const modal = document.getElementById('popupdiv');
  const itemContainer = document.createElement('div');
  itemContainer.innerHTML = `
  <h1 style="margin-bottom:3rem;">${job.name}</h1>
  <div class="detail">
    <h4 style="margin:1rem;">Responsibilities</h4>
    </div>
  <button id="${job.name}-openModalBtn" style="margin:1rem;">Apply Now</button>
          `;
          for (const subItem of job.subItems) {
            const subItemContainer = document.createElement('div');
            subItemContainer.innerHTML = `
            <ul style="width:80%; ">
              <li>${subItem}</li>
              </ul>
              `;
              
            
              itemContainer.querySelector('.detail').appendChild(subItemContainer);
            }
          itemList.appendChild(itemContainer);
          document.getElementById(`${job.name}-openModalBtn`).addEventListener('click', () => {
          modal.style.display = 'flex';
          const forms = document.getElementById('form');
          const hiddeninput = document.createElement('div');
            hiddeninput.innerHTML = `
          <input type="hidden" name="user_position" value='${job.name}'  required="true"> 
            
            `;
            forms.appendChild(hiddeninput);
        });

      }


  // Get references to the modal trigger button and modal
  
  
  // Add click event listener to the modal trigger button
    const modalC = document.getElementById('popupclose');
  
  
  // Add click event listener to the modal background to close the modal
  const modal = document.getElementById('popupdiv');

modalC.addEventListener('click', (e) => {
  if (e.target === modalC) {
    modal.style.display = 'none';
  }
});
</script>
@endsection
{{-- for (const item of items) {
  const modal = document.getElementById('popupdiv');
  const itemContainer = document.createElement('div');
  itemContainer.innerHTML = `
  <div class="card">
    <div class="card-block">
      <div class="">
        <h3>${item.name}</h3>
        </div>
        <div class="card-body" >
          <span id="${item.name}-Expand"  > </span>
          </div>
          <div class="details" id="${item.name}-details">
            <h6 style="font-weight:600">Responsibilities</h6>
            </div>
          <button id="${item.name}-openModalBtn" >Apply Now</button>
          </div>
          </div>
          `;
          for (const subItem of item.subItems) {
            const subItemContainer = document.createElement('div');
            subItemContainer.innerHTML = `
            <ul>
              <li>${subItem}</li>
              </ul>
            
            `;
            itemContainer.querySelector('.details').appendChild(subItemContainer);
          }
            // for (const subItem2 of item.subItems2) {
            // const subItemContainer2 = document.createElement('div');
            // subItemContainer2.innerHTML = `
            // <ul>
            //   <li>${subItem2.name}</li>
            //   </ul>
            
            // `;
            // itemContainer.querySelector('.details').appendChild(subItemContainer2);
            // }
        itemList.appendChild(itemContainer);

    
        
        document.getElementById(`${item.name}-openModalBtn`).addEventListener('click', () => {
          modal.style.display = 'flex';
          const forms = document.getElementById('form');
          const hiddeninput = document.createElement('div');
            hiddeninput.innerHTML = `
          <input type="hidden" name="user_position" value='${item.name}'  required="true"> 
            
            `;
            forms.appendChild(hiddeninput);
        });

        const details = document.getElementById(`${item.name}-details`);
        const a = document.getElementById(`${item.name}-Expand`);

        document.getElementById(`${item.name}-Expand`).addEventListener('click', () => {
        if( details.style.display === 'flex'){

          details.style.display = 'none';
          a.classList.remove("active");
          
        }else{
          details.style.display = 'flex';
          a.classList.add("active");
          
        }
      
        });
  } --}}
