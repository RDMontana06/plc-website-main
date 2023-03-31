@extends('layout.main')
<style>
    .cons{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 3rem auto;
    }
    .cards{
        width: 80vw;
        margin: 2rem auto; 
        max-width: 700px;
        background: white;
        box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.2);
    }
    .cards img{ 
        width: 100%;
        position: relative;
        top: 0;
    }
    .cards .details{
        width: 100%;
        padding: 1rem 2rem
    }
    .cards h1{
        font-size: 1.5rem;
    }
    .cards p{
        text-align: justify;

    }
</style>
@section('content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/hero-section/PMI_Tower.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-0 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
						<span>News & Updates <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">News & Updates</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
			<div class="cons">
                <div class="cards">
                    <img src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-6/333930683_759230425389812_694797867266058831_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEcJ5gJkIue5-thw19-Kl6vpctulMNm35qly26Uw2bfmrOnWN4-2v_JDfywB3V9LVF1clxBaB89uEbLAmkAj5Jz&_nc_ohc=fGE7CN6h7XQAX_Nag85&_nc_ht=scontent.fmnl3-1.fna&oh=00_AfALGsYy26yQBp3g6nSBs6QdNnDM0R_gA-yabOv-l1WSJg&oe=642B47E6" alt="">
                    <div class="details">
                        <h1>Megacity Township breaks ground in Ormoc City</h1>
                        <p>TACLOBAN CITY - In a bid to become the most progressive city in Eastern Visayas, Ormoc City Megacity Township broke ground on Monday (March 6) at the Brgy. Naungan Mangrove Eco-Park.</p>
                        <a href="https://mb.com.ph/2023/03/07/megacity-township-breaks-ground-in-ormoc-city/?fbclid=IwAR1RYzud5EBKEdZz6VlRph8b20nKU52fmFmD7bGuUHgTaL6psNZ_EurYrOc">read more</a>
                    </div>

                </div>
                <div class="cards">
                    <img src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t39.30808-6/334670243_147236258223480_37754384886571616_n.png?stp=dst-png_p843x403&_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFUVVVlzzUcx_RswrtGaFE44tS6FSi6i43i1LoVKLqLjRjbJMrJqupv6gCwy8MW7D-4kMDpYwjF_GYXcTDYq4tU&_nc_ohc=NT8-EAYIMhEAX_88hXx&_nc_ht=scontent.fmnl3-3.fna&oh=00_AfCno176JAx0SAfXmlHa2RuOUXlK0yL6AzawVyw5BQKT9Q&oe=642AF590" alt="">
                    <div class="details">
                        <h1>Megacity Township breaks ground in Ormoc City</h1>
                        <p>Ormoc City Mayor Lucy Torres-Gomez, in her speech during the groundbreaking ceremony of the upcoming Ormoc Megacity, on Monday, March 6, lauded the efforts of her husband and former mayor, now Congressman Richard "GOMA" Gomez</p>
                        <a href="https://www.facebook.com/935brigadaormoc/photos/a.125819746885938/169648242503088/">read more</a>
                    </div>

                </div>
                <div class="cards">
                    <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/334973182_1548528818965446_8565530840872711244_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeF_QA_qFsUmnZ3XAVPHaX8blUB1aNtUcjOVQHVo21RyMyMeo5yImZn0lm6pz5-O7BGcRJPlrFjAof0dU5hefxpg&_nc_ohc=wH0bv-bPNisAX8kq1wM&_nc_ht=scontent.fmnl3-2.fna&oh=00_AfAjiWb2cCtNag6J1xqCsfCQzghzo_06zwxd90Elfs67OQ&oe=642A2E97" alt="">
                    <div class="details">
                        <h1>Megacity Township breaks ground in Ormoc City</h1>
                        <p>Congressman Richard "GOMA" Gomez, in a talk during the groundbreaking ceremony of the Ormoc Megacity Development project on Monday, March 6, expressed his excitement over what is to come in the...</p>
                        <a href="https://www.facebook.com/935brigadaormoc/photos/a.125819746885938/170073859127193/">read more</a>
                    </div>

                </div>
                <div class="cards">
                    <img src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-6/333930683_759230425389812_694797867266058831_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEcJ5gJkIue5-thw19-Kl6vpctulMNm35qly26Uw2bfmrOnWN4-2v_JDfywB3V9LVF1clxBaB89uEbLAmkAj5Jz&_nc_ohc=fGE7CN6h7XQAX_Nag85&_nc_ht=scontent.fmnl3-1.fna&oh=00_AfALGsYy26yQBp3g6nSBs6QdNnDM0R_gA-yabOv-l1WSJg&oe=642B47E6" alt="">
                    <div class="details">
                        <h1>Megacity Township breaks ground in Ormoc City</h1>
                        {{-- <p>TACLOBAN CITY - In a bid to become the most progressive city in Eastern Visayas, Ormoc City Megacity Township broke ground on Monday (March 6) at the Brgy. Naungan Mangrove Eco-Park.</p> --}}
                        <a href="https://www.facebook.com/OrmocNU/photos/a.105764977775589/768382604847153/">read more</a>
                    </div>

                </div>
            </div>
			</div>
		</div>
	</section>
@endsection
