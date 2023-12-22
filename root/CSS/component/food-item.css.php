<style>
    .card {
      width: 18rem;
      overflow: hidden;
      perspective: 1000px; /* Tạo hiệu ứng 3D */
    }

    .card:hover .card-img-top {
      
      transform: scale(1.2);  /*Ảnh sẽ phóng to 20% khi hover vào */
    }

    .card-img-top {
      transition: transform 0.3s ease-in-out; /* Hiệu ứng chuyển động */
      max-width: 100%;
    }
    
    img{
      border-radius: 12px;
    }
</style>