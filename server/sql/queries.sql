
DELETE FROM products WHERE id_product=5;

SELECT * FROM products;

INSERT INTO products(
    id_user,
    name,
    description,
    price,
    type,
    picture,
    available
) VALUES(
    3,
    'Laptop hp gaming',
    'Porcesador intel core i7, 16 gb de ram, ssd de 256',
    7499,
    'Electrónica',
    'https://scontent.fmex5-1.fna.fbcdn.net/v/t1.0-9/p720x720/89336461_2956049267794679_1957688519203749888_o.jpg?_nc_cat=101&_nc_sid=843cd7&_nc_ohc=N0SbLXSoEzUAX9yKwo_&_nc_ht=scontent.fmex5-1.fna&_nc_tp=6&oh=c7a3a9a419c62e1ed2b5bf4fc81daba3&oe=5E96B8AB',
    1
);


UPDATE users SET names='Andreus' WHERE id_user=1;

SELECT * FROM users WHERE id_user=1;
SELECT * FROM users;

INSERT INTO users(
    names,
    last_name,
    email,
    birthdate,
    phone,
    street,
    external_number,
    address_1,
    address_2,
    zip_code,
    state,
    picture,
    password
) VALUES (
    'Andrés',
    'Rojas',
    'andres@gmail.com',
    '1989-08-05',
    '5570464001',
    'Virgen de la concepción',
    186,
    'Colonia virgencitas',
    'Nezahualcóyotl',
    '57300',
    'Estado de México',
    'https://scontent-qro1-1.xx.fbcdn.net/v/t1.0-9/12105918_992181680848124_2252189656497965116_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=PxAco5PVfMUAX_N6T93&_nc_ht=scontent-qro1-1.xx&oh=1b9ceaa8ac6e26b1fbfdee7bd47e9f7f&oe=5E95FFF8'
    '123456'
);

INSERT INTO users(
    names,
    last_name,
    email,
    birthdate,
    phone,
    street,
    external_number,
    address_1,
    address_2,
    zip_code,
    state,
    picture
) VALUES (
    'Aris',
    'Suárez',
    'aris@gmail.com',
    '1989-08-05',
    '5570464001',
    'Virgen de la concepción',
    186,
    'Colonia virgencitas',
    'Nezahualcóyotl',
    '57300',
    'Estado de México',
    'https://scontent.fmex5-1.fna.fbcdn.net/v/t1.0-9/88344355_2946853435380929_6294056972064915456_n.jpg?_nc_cat=108&_nc_sid=dd9801&_nc_ohc=8TyJDcppbaUAX8OmC22&_nc_ht=scontent.fmex5-1.fna&oh=c58da821287f0f18eb95bc214479a2e5&oe=5E94BF60'
);