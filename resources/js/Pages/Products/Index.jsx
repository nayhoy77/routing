import { Link } from '@inertiajs/react';
export default function Index({ products }) {
  return (
    <>
      <header className="bg-gray-500 text-white py-5"> {/*สีของกรอบ สีตัวหนังสือ และขนาดของกรอบ*/}
        <h1 className="text-center text-3xl font-bold">NAYHOY SHOP</h1> 
      </header>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> {/*การจัดเรียงสินค้าแบบแนว*/}
          {products.map((product) => (
            <div
              key={product.id}
              className="bg-white shadow-md rounded-lg"> {/*พื้นหลัง เงา กรอบรูป*/}
              <Link href={`/products/${product.id}`}>
                <img
                  src={product.img}
                  className="object-cover"/> {/*ขนาดรูปภาพ*/}
                <div className="p-5">
                  <h2 className="text-lg font-semibold text-gray-900"> {/*รายละเอียดสินค้า*/}
                    {product.name}
                  </h2>
                  <p className="text-gray-900 mt-5">${product.price}</p> {/*ราคาสินค้า*/}
                </div>
              </Link>
              <img src={product.img} alt="" width={'50'}/> {/*ขนาดรูปภาพข้างล่าง*/}
            </div>
          ))}
        </div>
      <footer className="bg-gray-500 text-white py-4 text-center"> {/*สีของกรอบ สีตัวหนังสือ และขนาดของกรอบ*/}
        <p>Thank you for using the service NAYHOY SHOP.</p>
      </footer>
    </>
  );
}
