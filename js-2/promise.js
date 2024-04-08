var address = "https://jsonplaceholder.typicode.com";

console.log(1);

async function getUsers() {
  return fetch(`${address}/users`).then((res) => res.json());
}

getUsers()
  .then((res) => {
    console.log(res);
    return res;
  })
  .then((users) => {
    users.forEach((u) => console.log(u.name));
  })
  .catch((err) => {
    console.log(err);
    //handle error
  });

console.log("2");

// try {
//   var users = await getUsers();
//   console.log(users);
// } catch (ex) {
//   console.log(ex);
// }
