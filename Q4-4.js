
const UserCart = [
        { productId: 1, productName: "Mobile", price: 70000 },
        { productId: 1, productName: "Mobile", price: 70000 },
        { productId: 2, productName: "Laptop", price: 100000 },
        { productId: 5, productName: "Shoes", price: 35000 },
      ];
      const sum = UserCart.reduce(function (acc, obj) {
        return acc + obj.price;
      }, 0);
      console.log(sum);