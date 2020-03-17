
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
    'Lopez',
    'andres@gmail.com',
    '1993-02-15',
    '5511112222',
    'Street 99',
    186,
    'Colonia Lomas',
    'Ecatepec',
    '06300',
    'CDMX',
    '',
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
    'Mendoza',
    'aris@gmail.com',
    '1990-06-23',
    '5511113333',
    'Street 64',
    186,
    'Lomas',
    'Ixtapaluca',
    '06980',
    'Estado de México',
    ''
);