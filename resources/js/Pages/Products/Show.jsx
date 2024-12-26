import { Link } from '@inertiajs/react';
export default function Show({ product }) {
   return (
      <div>
           <h1>{product.name}</h1>
           <p>{product.description}</p>
           <p>Price: ${product.price}</p>
           <img src={product.img} alt="" width={'500'} /> {/*ขนาดของรูปภาพในรายละเอียดสินค้า*/}
           <footer className="bg-gray-500 text-white py-4 text-center"> {/*สีของกรอบ สีตัวหนังสือ และขนาดของกรอบ*/}
           <Link href="/products">Back to All Products</Link>
           </footer>
      </div>
     );
}