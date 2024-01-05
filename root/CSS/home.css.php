<style>
    *{
        margin: 0;
        padding: 0;
    }
    .container-fluid>h2,
    .container>h2{
        color: var(--Neutral-07, #2C2F24);
        /* text-align: center; */
        /* Headline/H2 */
        font-family: Playfair Display;
        font-size: 55px;
        font-style: normal;
        font-weight: 500;
        line-height: 60.5px; /* 110% */
    }
    #hero {
        width: 100%;
        height: 800px;
        background: url(<?=URL_ROOT . URL_SUBFLODER .'/root/assets/homepage-image/bacground-homepage.png';?>) center/cover no-repeat; 
        margin: 10px 0 50px 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }
    #hero-button{
        display: flex;
        flex-direction: row; 
        gap: 20px;
    }
    #btn-book-tb:active{
        background-color: #AD343E;
    }
   
    .bg-1{
        background-color: rgba(249, 249, 247, 0.9);        
    }
    #chef-left{
        height: 600px;
        flex-shrink: 0;
        border-radius: 12px;
        background-image: url(<?=URL_ROOT . URL_SUBFLODER .'/root/assets/homepage-image/chef-left.png';?>), linear-gradient(lightgray, lightgray);
        background-position: center, 50% 50%;
        background-size: cover, auto; /* Set the size as needed */
        background-repeat: no-repeat;
    }
    #soup-top-right{
        height: 333px;
        flex-shrink: 0;
        border-radius: 12px;
        background: url(<?=URL_ROOT . URL_SUBFLODER .'/root/assets/homepage-image/soup-top-right.png';?>), linear-gradient(lightgray, lightgray);
        background-position: center, 50% 50%;
        background-size: cover, auto; /* Set the size as needed */
        background-repeat: no-repeat;
    }
    #grill-bottom-right{
        height: 240px;
        flex-shrink: 0;
        border-radius: 12px;
        background: url(<?=URL_ROOT . URL_SUBFLODER .'/root/assets/homepage-image/grill-bottom-right.png';?>), linear-gradient(lightgray, lightgray);
        background-position: center, 50% 50%;
        background-size: cover, auto; /* Set the size as needed */
        background-repeat: no-repeat;
    }

    #content-fast-food{
        color: var(--Neutral-07, #2C2F24);
        /* Body/20px/Medium */
        font-family: DM Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 26px; /* 130% */
        padding-top: 15px;
    }
</style>
