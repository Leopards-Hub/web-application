<style>
.container-about{
    width:max-content;
}

.video-about {
    margin-top: 100px;
    text-align: center;
}



.video-container {
    position: relative;
    padding-bottom: 50%;

}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 65%;
    padding-right: 150px;
   
}
.item-about{
   position:absolute;
   top:800px;
    display:flex;
    width:1200px;
    margin-left: 180px;
}
.item{
    display: flex;
    align-items: flex-start;
    gap: 20px;
}
.item-content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
   



}
#large-item-content{
    color: var(--Neutral-07, #2C2F24);
text-align: center;

/* Body/20px/Bold */
font-family: DM Sans;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: 40px; /* 130% */

}
#smaill-item-content{
    color: var(--Neutral-06, #414536);

/* Body/16px/Regular */
font-family: DM Sans;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 15px; /* 150% */
width: 250px;
}


.information-about {
    display: flex;
    width: 1600px;
    height: 600px;
    flex-shrink: 0;
    background: var(--Neutral-02, #ECECEA); /* Thay đổi giá trị màu hoặc thay mã màu hex tại đây */
    padding-bottom: 80px;
}
    

.information-left{
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 30px;
    padding-left:100px;

}
.card{
    width: 293px;
height: 174px;
flex-shrink: 0;
border-radius: 8px;
border: 1px solid var(--Neutral-03, #DBDFD0);
background: var(--Neutral-01, #FFF);
}
.card h2{
    color: var(--Neutral-07, #2C2F24);
text-align: center;

/* Headline/H2 */
font-family: Playfair Display;
font-size: 55px;
font-style: normal;
font-weight: 500;
line-height: 60.5px; /* 110% */
}
.card p {
    color: var(--Neutral-06, #414536);
    text-align: center;

    /* Body/18px/Medium */
    font-family: DM Sans;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: 28px; /* 155.556% */
}
.card-number {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.sum-card {
  width: 48%; /* Điều chỉnh chiều rộng của khung con */
  margin-bottom: 20px; /* Điều chỉnh khoảng cách giữa các khung */
}

.card {
  background-color: #f2f2f2; /* Màu nền của khung */
  padding: 10px;
  text-align: center;
  margin-bottom: 40px;
  margin-right: 30px;
}
.information-right img {
    position:absolute;
    right:100px;
    width: 400px;
    height: 550px;

}
</style>