<style>
    .card {
      padding: 0;
      width: 18rem;
      overflow: hidden;
      perspective: 1000px;  /*Hiệu ứng 3D */
      border-radius: 12px;
    }

    .card:hover .card-img-top {
      
      
      transform: scale(1.2);  /*Ảnh sẽ phóng to 20% khi hover vào */
    }

    .card-img-top {
      margin : 0;
      padding: 0;
      transition: transform 1s ease-in-out; /* Hiệu ứng chuyển động */
      max-width: 100%;
    }
    
    img{
      border-radius: 12px;
    }
</style>