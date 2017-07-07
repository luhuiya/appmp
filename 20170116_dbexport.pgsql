--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.0
-- Dumped by pg_dump version 9.6.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: balance; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE balance (
    id integer NOT NULL,
    user_id integer,
    balance numeric(10,2) DEFAULT NULL::numeric,
    last_balance numeric(10,2) DEFAULT NULL::numeric,
    last_usage timestamp(0) without time zone NOT NULL
);


ALTER TABLE balance OWNER TO postgres;

--
-- Name: balance_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE balance_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE balance_id_seq OWNER TO postgres;

--
-- Name: category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE category (
    id integer NOT NULL,
    name character varying(100) DEFAULT NULL::character varying,
    target character varying(255) DEFAULT NULL::character varying,
    priority integer,
    is_active boolean,
    created timestamp(0) without time zone NOT NULL
);


ALTER TABLE category OWNER TO postgres;

--
-- Name: category_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE category_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE category_id_seq OWNER TO postgres;

--
-- Name: fos_user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE fos_user (
    id integer NOT NULL,
    username character varying(180) NOT NULL,
    username_canonical character varying(155) NOT NULL,
    email character varying(180) NOT NULL,
    email_canonical character varying(155) NOT NULL,
    enabled boolean NOT NULL,
    salt character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    last_login timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    locked boolean NOT NULL,
    expired boolean NOT NULL,
    expires_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    confirmation_token character varying(180) DEFAULT NULL::character varying,
    password_requested_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    roles text NOT NULL,
    credentials_expired boolean NOT NULL,
    credentials_expire_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE fos_user OWNER TO postgres;

--
-- Name: COLUMN fos_user.roles; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN fos_user.roles IS '(DC2Type:array)';


--
-- Name: fos_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE fos_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE fos_user_id_seq OWNER TO postgres;

--
-- Name: home_layout; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE home_layout (
    id integer NOT NULL,
    layout_name character varying(255) NOT NULL,
    layout_type integer NOT NULL,
    "position" integer NOT NULL,
    category character varying(255) DEFAULT NULL::character varying,
    subcategory character varying(255) DEFAULT NULL::character varying,
    created timestamp(0) without time zone NOT NULL
);


ALTER TABLE home_layout OWNER TO postgres;

--
-- Name: home_layout_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE home_layout_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE home_layout_id_seq OWNER TO postgres;

--
-- Name: home_product_list; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE home_product_list (
    id integer NOT NULL,
    product_id integer NOT NULL,
    layout_id integer NOT NULL,
    "position" integer NOT NULL,
    created timestamp(0) without time zone NOT NULL
);


ALTER TABLE home_product_list OWNER TO postgres;

--
-- Name: home_product_list_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE home_product_list_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE home_product_list_id_seq OWNER TO postgres;

--
-- Name: image_type_product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE image_type_product (
    id integer NOT NULL,
    code character varying(255) NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE image_type_product OWNER TO postgres;

--
-- Name: image_type_product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE image_type_product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE image_type_product_id_seq OWNER TO postgres;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE migrations_id_seq OWNED BY migrations.id;


--
-- Name: oauth_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE oauth_access_tokens (
    id character varying(100) NOT NULL,
    user_id integer,
    client_id integer NOT NULL,
    name character varying(255),
    scopes text,
    revoked boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone
);


ALTER TABLE oauth_access_tokens OWNER TO postgres;

--
-- Name: oauth_auth_codes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE oauth_auth_codes (
    id character varying(100) NOT NULL,
    user_id integer NOT NULL,
    client_id integer NOT NULL,
    scopes text,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone
);


ALTER TABLE oauth_auth_codes OWNER TO postgres;

--
-- Name: oauth_clients; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE oauth_clients (
    id integer NOT NULL,
    user_id integer,
    name character varying(255) NOT NULL,
    secret character varying(100) NOT NULL,
    redirect text NOT NULL,
    personal_access_client boolean NOT NULL,
    password_client boolean NOT NULL,
    revoked boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE oauth_clients OWNER TO postgres;

--
-- Name: oauth_clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE oauth_clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE oauth_clients_id_seq OWNER TO postgres;

--
-- Name: oauth_clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE oauth_clients_id_seq OWNED BY oauth_clients.id;


--
-- Name: oauth_personal_access_clients; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE oauth_personal_access_clients (
    id integer NOT NULL,
    client_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE oauth_personal_access_clients OWNER TO postgres;

--
-- Name: oauth_personal_access_clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE oauth_personal_access_clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE oauth_personal_access_clients_id_seq OWNER TO postgres;

--
-- Name: oauth_personal_access_clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE oauth_personal_access_clients_id_seq OWNED BY oauth_personal_access_clients.id;


--
-- Name: oauth_refresh_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE oauth_refresh_tokens (
    id character varying(100) NOT NULL,
    access_token_id character varying(100) NOT NULL,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone
);


ALTER TABLE oauth_refresh_tokens OWNER TO postgres;

--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE password_resets OWNER TO postgres;

--
-- Name: payment; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE payment (
    id integer NOT NULL,
    number character varying(255) DEFAULT NULL::character varying,
    description character varying(255) DEFAULT NULL::character varying,
    client_email character varying(255) DEFAULT NULL::character varying,
    client_id character varying(255) DEFAULT NULL::character varying,
    total_amount integer,
    currency_code character varying(255) DEFAULT NULL::character varying,
    details json NOT NULL
);


ALTER TABLE payment OWNER TO postgres;

--
-- Name: payment_details; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE payment_details (
    id integer NOT NULL,
    details json NOT NULL
);


ALTER TABLE payment_details OWNER TO postgres;

--
-- Name: payment_details_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE payment_details_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE payment_details_id_seq OWNER TO postgres;

--
-- Name: payment_details_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE payment_details_id_seq OWNED BY payment_details.id;


--
-- Name: payment_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE payment_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE payment_id_seq OWNER TO postgres;

--
-- Name: payment_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE payment_id_seq OWNED BY payment.id;


--
-- Name: payment_method; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE payment_method (
    id integer NOT NULL,
    code character varying(255) DEFAULT NULL::character varying,
    name character varying(100) DEFAULT NULL::character varying,
    is_active boolean
);


ALTER TABLE payment_method OWNER TO postgres;

--
-- Name: payment_method_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE payment_method_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE payment_method_id_seq OWNER TO postgres;

--
-- Name: payment_token; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE payment_token (
    hash character varying(255) NOT NULL,
    details text,
    after_url text,
    target_url text NOT NULL,
    gateway_name character varying(255) NOT NULL
);


ALTER TABLE payment_token OWNER TO postgres;

--
-- Name: COLUMN payment_token.details; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN payment_token.details IS '(DC2Type:object)';


--
-- Name: position_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE position_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE position_id_seq OWNER TO postgres;

--
-- Name: post; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE post (
    id integer NOT NULL,
    created_by_id integer,
    title character varying(255) NOT NULL,
    content text NOT NULL,
    visible boolean NOT NULL,
    rating integer NOT NULL,
    published_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE post OWNER TO postgres;

--
-- Name: post_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE post_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE post_id_seq OWNER TO postgres;

--
-- Name: prdposition; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE prdposition (
    id integer NOT NULL,
    product_id integer NOT NULL,
    "position" integer NOT NULL,
    category character varying(255) DEFAULT NULL::character varying,
    subcategory character varying(255),
    position_top integer,
    created timestamp(0) without time zone NOT NULL
);


ALTER TABLE prdposition OWNER TO postgres;

--
-- Name: prdposition_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE prdposition_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE prdposition_id_seq OWNER TO postgres;

--
-- Name: product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE product (
    id integer NOT NULL,
    product_name character varying(100) DEFAULT NULL::character varying,
    package_code numeric(10,0) DEFAULT NULL::numeric,
    price numeric(10,2) DEFAULT NULL::numeric,
    description text,
    compatibility character varying(100) DEFAULT NULL::character varying,
    urldownload character varying(2000) DEFAULT NULL::character varying,
    status character varying(100) DEFAULT NULL::character varying,
    created timestamp(0) without time zone NOT NULL,
    category_id integer,
    sub_category_id integer
);


ALTER TABLE product OWNER TO postgres;

--
-- Name: product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE product_id_seq OWNER TO postgres;

--
-- Name: product_image; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE product_image (
    id integer NOT NULL,
    product_id integer,
    image_type_id integer NOT NULL,
    image character varying(255) NOT NULL,
    image_url character varying(255) NOT NULL
);


ALTER TABLE product_image OWNER TO postgres;

--
-- Name: product_image_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE product_image_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE product_image_id_seq OWNER TO postgres;

--
-- Name: subcategory; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE subcategory (
    id integer NOT NULL,
    name character varying(100) DEFAULT NULL::character varying,
    target character varying(255) DEFAULT NULL::character varying,
    priority integer,
    is_active boolean,
    created timestamp(0) without time zone NOT NULL,
    category_id integer
);


ALTER TABLE subcategory OWNER TO postgres;

--
-- Name: subcategory_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE subcategory_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE subcategory_id_seq OWNER TO postgres;

--
-- Name: top_up_voucher; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE top_up_voucher (
    id integer NOT NULL,
    code character varying(255) DEFAULT NULL::character varying,
    price numeric(10,2) DEFAULT NULL::numeric,
    name character varying(255) DEFAULT NULL::character varying,
    is_active boolean
);


ALTER TABLE top_up_voucher OWNER TO postgres;

--
-- Name: top_up_voucher_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE top_up_voucher_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE top_up_voucher_id_seq OWNER TO postgres;

--
-- Name: trans_payment; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE trans_payment (
    id integer NOT NULL,
    trans_id character varying(255) NOT NULL,
    detail_id integer,
    payment_method character varying(100) DEFAULT NULL::character varying,
    created timestamp(0) without time zone NOT NULL,
    urldownload text,
    times_download integer,
    max integer,
    token character varying(255) DEFAULT NULL::character varying,
    user_id integer,
    price numeric(10,2) DEFAULT NULL::numeric,
    status integer,
    url_callback text,
    payment_target character varying(100) DEFAULT NULL::character varying,
    voucher_code character varying(100) DEFAULT NULL::character varying
);


ALTER TABLE trans_payment OWNER TO postgres;

--
-- Name: trans_payment_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE trans_payment_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE trans_payment_id_seq OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    role character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: voucher; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE voucher (
    id integer NOT NULL,
    code character varying(255) DEFAULT NULL::character varying,
    name character varying(255) DEFAULT NULL::character varying,
    startdate timestamp(0) without time zone NOT NULL,
    enddate timestamp(0) without time zone NOT NULL,
    maxclaim integer,
    target_type integer,
    is_active boolean,
    disc integer
);


ALTER TABLE voucher OWNER TO postgres;

--
-- Name: voucher_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE voucher_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE voucher_id_seq OWNER TO postgres;

--
-- Name: vouchers; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE vouchers (
    id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE vouchers OWNER TO postgres;

--
-- Name: vouchers_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE vouchers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE vouchers_id_seq OWNER TO postgres;

--
-- Name: vouchers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE vouchers_id_seq OWNED BY vouchers.id;


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY migrations ALTER COLUMN id SET DEFAULT nextval('migrations_id_seq'::regclass);


--
-- Name: oauth_clients id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_clients ALTER COLUMN id SET DEFAULT nextval('oauth_clients_id_seq'::regclass);


--
-- Name: oauth_personal_access_clients id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_personal_access_clients ALTER COLUMN id SET DEFAULT nextval('oauth_personal_access_clients_id_seq'::regclass);


--
-- Name: payment id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment ALTER COLUMN id SET DEFAULT nextval('payment_id_seq'::regclass);


--
-- Name: payment_details id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_details ALTER COLUMN id SET DEFAULT nextval('payment_details_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Name: vouchers id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY vouchers ALTER COLUMN id SET DEFAULT nextval('vouchers_id_seq'::regclass);


--
-- Data for Name: balance; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY balance (id, user_id, balance, last_balance, last_usage) FROM stdin;
3	23	0.00	0.00	2016-11-18 07:39:07
6	24	0.00	0.00	2016-11-23 07:31:43
7	26	0.00	0.00	2016-11-30 07:19:39
8	27	0.00	0.00	2016-12-01 06:08:01
2	19	7500.00	20000.00	2016-12-09 03:13:01
1	1	50000.00	7500.00	2016-12-13 06:37:10
9	28	0.00	0.00	2017-01-10 02:52:21
\.


--
-- Name: balance_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('balance_id_seq', 9, true);


--
-- Data for Name: category; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY category (id, name, target, priority, is_active, created) FROM stdin;
3	Movies	#movies	1	t	2016-10-25 08:12:06
5	Books	#books	3	t	2016-11-02 08:37:45
4	Aplications	#aplications	2	t	2016-10-25 08:14:17
6	Musics	#musics	4	t	2016-11-02 09:37:23
\.


--
-- Name: category_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('category_id_seq', 7, true);


--
-- Data for Name: fos_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY fos_user (id, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, locked, expired, expires_at, confirmation_token, password_requested_at, roles, credentials_expired, credentials_expire_at) FROM stdin;
28	andang	andang	andang@gmail.com	andang@gmail.com	t	rwea5az8xzk8cooo0wc0oowkwosk4cg	$2y$13$HrSBJzQNAqyEWErcpYD9Q.H3E4y9/Ri/zORrqwe4CM2RV3CUhh2Ua	\N	f	f	\N	\N	\N	a:0:{}	f	\N
26	reactuser	reactuser	react@test.com	react@test.com	t	gkb73c7dqjso0kww8g40k400scw4cws	$2y$13$y22Vd.hef1uw.kQVBv340.rbDs9IEj8zSV7x7sV0Ot2.BPLmcM/cq	2016-12-01 04:19:54	f	f	\N	\N	\N	a:0:{}	f	\N
27	reacttest	reacttest	test@test.com	test@test.com	t	im02pjj7pvs40g8www0swwg0g0w0ckc	$2y$13$kKuUv.3sb16gbaWYTSAptuvWlqN2Xb8xAD6FeyY4qhZA13CVwLDI6	2016-12-01 06:08:49	f	f	\N	\N	\N	a:0:{}	f	\N
23	rian	rian	rian@gmail.com	rian@gmail.com	t	llzrbmnrhxc0ogkok484oc844ckgscw	$2y$13$u1IEx2HB6OQ9p4/itp7suOAup3kGWEVJZvGDq47jxpeoqR1ypKJJ.	\N	f	f	\N	\N	\N	a:0:{}	f	\N
24	riand	riand	riand@gmail.com	riand@gmail.com	t	7bs5l354lcow88k44gs4s44g4888c8w	$2y$13$F7oHcBs4OfNT8ZpdiMIb2eD866iMZE8a7NeRkn6SyBgGkv4KeiGcC	\N	f	f	\N	\N	\N	a:0:{}	f	\N
1	admin	admin	dms2707@gmail.com	dms2707@gmail.com	t	t4wv3ry4rbkc0oosoo4ww4w8gg4o0ss	$2y$13$/c4DY4uHVtSjuuyHFE8wPe5Rwf5j9bA4SjwOyeavfAn5Jkjpyo6E6	2017-01-03 06:27:18	f	f	\N	\N	\N	a:1:{i:0;s:10:"ROLE_ADMIN";}	f	\N
19	andang	andang	andang@gmail.com	andang@gmail.com	t	rx3xlccz7msws0sgs4gcwkggog08ogs	$2y$13$wEogjT5RxIny5zI0G88dleR7nYpXZxCgVeExXTr1YweifF1VL/oge	2016-12-21 08:27:13	f	f	\N	\N	\N	a:0:{}	f	\N
\.


--
-- Name: fos_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('fos_user_id_seq', 28, true);


--
-- Data for Name: home_layout; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY home_layout (id, layout_name, layout_type, "position", category, subcategory, created) FROM stdin;
3	fasfsaf	1	2	Software	Android	2016-10-28 10:38:03
\.


--
-- Name: home_layout_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('home_layout_id_seq', 3, true);


--
-- Data for Name: home_product_list; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY home_product_list (id, product_id, layout_id, "position", created) FROM stdin;
\.


--
-- Name: home_product_list_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('home_product_list_id_seq', 1, false);


--
-- Data for Name: image_type_product; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY image_type_product (id, code, name) FROM stdin;
1	prev	Previews Pictures
\.


--
-- Name: image_type_product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('image_type_product_id_seq', 1, false);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2016_06_01_000001_create_oauth_auth_codes_table	1
4	2016_06_01_000002_create_oauth_access_tokens_table	1
5	2016_06_01_000003_create_oauth_refresh_tokens_table	1
6	2016_06_01_000004_create_oauth_clients_table	1
7	2016_06_01_000005_create_oauth_personal_access_clients_table	1
8	2016_12_16_064738_create_vouchers_table	1
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('migrations_id_seq', 8, true);


--
-- Data for Name: oauth_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY oauth_access_tokens (id, user_id, client_id, name, scopes, revoked, created_at, updated_at, expires_at) FROM stdin;
f74847f8ee87f5ec0beca036d4e5f15e371df72ce63f28a63a59f17c568f482c0c0c237cf41a4790	1	2	\N	["*"]	f	2016-12-22 03:58:19	2016-12-22 03:58:19	2017-12-22 03:58:19
9e7be266c94b6365538bef7e787a699ad4f07c8d9ca153ff37800a9901cc7aedc7057005aa3a4a20	1	2	\N	["*"]	f	2016-12-22 05:29:23	2016-12-22 05:29:23	2017-12-22 05:29:23
7c8ec8fa683738f9a78b6a7d36c97c9f68ad7addbc00f8fc7469e6fd5fb80f7ddad3193dba887144	1	2	\N	["*"]	f	2016-12-23 01:42:46	2016-12-23 01:42:46	2017-12-23 01:42:46
0ff0227cb8c3a7ba033767839bc0b982de387998362bfa2120c4f2efec5b1c16b28844faeb18376f	2	2	\N	["*"]	f	2016-12-23 01:43:44	2016-12-23 01:43:44	2017-12-23 01:43:44
10135b7b0257ca0aeb15f419ba4a6c5640cdbc9e3cc10eb53a3217b8972e33a72a59fe875ed9db65	2	2	\N	["*"]	f	2016-12-23 01:43:46	2016-12-23 01:43:46	2017-12-23 01:43:46
65e8bdcf34ba70174bdf442c4877cd94e7fb4dc6f62ac190acd2ebc607778f6d2534c7fbc67b153e	2	2	\N	["*"]	f	2016-12-23 01:54:24	2016-12-23 01:54:24	2017-12-23 01:54:24
f9214cf83bc847161fecb581c4a93bc3da4e71e598b84fbff3f20b2eade1e367940b9535d352b8d8	2	2	\N	["*"]	f	2016-12-23 01:55:19	2016-12-23 01:55:19	2017-12-23 01:55:19
05999146a2372220d43dc84bdb3350337388cb04503a00add533c6a07029a09afef30a94558be4da	2	2	\N	["*"]	f	2016-12-23 02:46:40	2016-12-23 02:46:40	2017-12-23 02:46:40
2646adcc3c5b88269edaa69df901c5cb59bc0166ec23e5df706dc2893d5bcc1dca5ba36b3f497c3c	2	2	\N	["*"]	f	2016-12-23 06:19:48	2016-12-23 06:19:48	2017-12-23 06:19:48
0d5531fd6ce558692ac9a257fb9111864627009af0ec935bd51a09a3f0a59f4e06bfeb157850f57c	2	2	\N	["*"]	f	2016-12-23 08:11:45	2016-12-23 08:11:45	2017-12-23 08:11:45
f9dd0e275559acf0bddf1075059c0d53850b01d8a9012e6d3a288592e46357041d81f285f5cbb161	2	2	\N	["*"]	f	2017-01-03 02:06:56	2017-01-03 02:06:56	2018-01-03 02:06:56
d7ad39e34424adef860e5a0c95536a79715ce850c099fa7fc7bc4d73d72fa49e4bda5759fb75b2b9	2	2	\N	["*"]	f	2017-01-03 02:06:57	2017-01-03 02:06:57	2018-01-03 02:06:57
c2bf53b69042e41c398dd093092eba02c962d91a05ff2cda302bb042f1d3d2eb5b2b6ec87093b003	2	2	\N	["*"]	f	2017-01-03 03:25:08	2017-01-03 03:25:08	2018-01-03 03:25:08
7bfed58888330b1925c59db8369e6d8aaa41713bdcff9fbaeb9b1412196dc4d608f7b2bee67a3dda	2	2	\N	["*"]	f	2017-01-05 02:18:50	2017-01-05 02:18:50	2018-01-05 02:18:50
c7c80314a10f822e1ba166fb555da0ef60f4716ef4e838cc2cf0bd86b9cee3f5fc852b4afab8d1fb	2	2	\N	["*"]	f	2017-01-05 02:23:08	2017-01-05 02:23:08	2018-01-05 02:23:08
e9deed25ffe5989db5a6206692235f5004dff362d1a2e24207d12f6bd2c8a3aa9094790648d0c818	2	2	\N	["*"]	f	2017-01-06 01:26:58	2017-01-06 01:26:58	2018-01-06 01:26:58
a49c822bbc07622cbdbdcd817f331291e3fc65b5ae6250746f6d0a6dc55365b9f4d6e98efdc91d5f	2	2	\N	["*"]	f	2017-01-09 01:22:44	2017-01-09 01:22:44	2018-01-09 01:22:44
7ec212f0b6a41497c2ca71c37cda457c63e96b3d5555161ebac223150c42a3899296f6a273e6f165	2	2	\N	["*"]	f	2017-01-09 01:22:46	2017-01-09 01:22:46	2018-01-09 01:22:46
767426ede19cb0c044ace68db35f7473d5c328dfa6a7cb5fd576a6cd0b0cccc3454725cb4656c703	2	2	\N	["*"]	f	2017-01-10 01:43:28	2017-01-10 01:43:28	2018-01-10 01:43:28
3fb9744baf615e389150f35132f39904765771d03d9d6d244277b9efe89f9ff09a9a854e08585e95	2	2	\N	["*"]	f	2017-01-10 06:30:10	2017-01-10 06:30:10	2018-01-10 06:30:10
277f9aba59fe8a31221401cc7b884c735fbde34830cb097e866e8802088472a01f06f76f2b8ef9f8	2	2	\N	["*"]	f	2017-01-10 06:30:10	2017-01-10 06:30:10	2018-01-10 06:30:10
caa5f1edfb1d90d0ba8d825a202c7ed454f7fc86cd0ffb3ae9d2423975cbb52204d9509a8df2996b	2	2	\N	["*"]	f	2017-01-10 09:43:49	2017-01-10 09:43:49	2018-01-10 09:43:49
4df0065dad6cc38d062edf268f6ee3bd1c3981823b226e431a14c1f1d3062f4621c159c4f25086c8	2	2	\N	["*"]	f	2017-01-10 09:44:06	2017-01-10 09:44:06	2018-01-10 09:44:06
26a227839f1c87e753534fa23c8a375eb64c906e114724a9c02a39fb125a6f7fb8a213539d9c7796	2	2	\N	["*"]	f	2017-01-11 06:15:49	2017-01-11 06:15:49	2018-01-11 06:15:49
e7f56a681d440e63a4acce8390e17cef086bd24bf360145355de6a03d73dc6c61f44d9032487b60e	2	2	\N	["*"]	f	2017-01-11 06:44:18	2017-01-11 06:44:18	2018-01-11 06:44:18
1bee0f9fefede01db9edada745bd98360a6c6585bddeafcb94c0a8b260d78b76b7e7e0d5d9f42102	2	2	\N	["*"]	f	2017-01-12 01:54:07	2017-01-12 01:54:07	2018-01-12 01:54:07
6eb79e3b6c0f546c84b7a0a90fa9351f8f59c4b610b6eb5c823dec3285af28c282007b6024995988	2	2	\N	["*"]	f	2017-01-12 01:54:49	2017-01-12 01:54:49	2018-01-12 01:54:49
545c31049dea1cfb80fc86cd2142de6326e0222b2118370c170abdb20b9278ab07bb454345dffc79	2	2	\N	["*"]	f	2017-01-12 01:57:59	2017-01-12 01:57:59	2018-01-12 01:57:59
7813eaf2c6121784e30b6ef933c2978dc53b20ba3fe8b5469bcca931bcc4cefc2890f5b60df37da4	2	2	\N	["*"]	f	2017-01-12 08:07:33	2017-01-12 08:07:33	2018-01-12 08:07:33
65751a332ff207c7ff70e27ed7b47d1af19d8079961cac7e3d48428ee315620b1214c219566c1b69	2	2	\N	["*"]	f	2017-01-12 08:13:48	2017-01-12 08:13:48	2018-01-12 08:13:48
bdf9621c816703d3c635d61e60b123e0f5543545d47368c1baeb650a0982e95c149b246ee1c8f447	14	2	\N	["*"]	f	2017-01-12 09:36:15	2017-01-12 09:36:15	2018-01-12 09:36:15
a36be68a7259e287900c33b430a5566862cf081f74b615f278aca30af7841892265d53cae7ed129f	2	2	\N	["*"]	f	2017-01-13 06:10:24	2017-01-13 06:10:24	2018-01-13 06:10:24
73b5316cdfed20adb916615737799ebb786ac344cfafdefbdfbd942178f3f3415709b510f94ffa1e	2	2	\N	["*"]	f	2017-01-13 06:10:53	2017-01-13 06:10:53	2018-01-13 06:10:53
c05d71e56ab4597f5eaf7dd3c5c0ebbdbe0abd3e0026f792a495056dc08c07192dc71023e53b9285	2	2	\N	["*"]	f	2017-01-13 06:46:02	2017-01-13 06:46:02	2018-01-13 06:46:02
3d57edffc3372d91b4eb9e9f946506e39bef0f46c1584aae62cb6a4f5815b3810cfe17fa3a3c27f4	2	2	\N	["*"]	f	2017-01-13 06:46:21	2017-01-13 06:46:21	2018-01-13 06:46:21
dbfe20d3b2f08862786525d0718adecc21275e22067698ca34f8f4deaccb0cc3c3012d7a58b579fe	15	2	\N	["*"]	f	2017-01-13 09:46:37	2017-01-13 09:46:37	2018-01-13 09:46:37
2f5cd20a076b340d32aac8d32da87e7a647c09c51b103ade3236c33f491126819365316884622c3c	15	2	\N	["*"]	f	2017-01-13 10:13:14	2017-01-13 10:13:14	2018-01-13 10:13:14
376043483f9138191bf4acac2af3341497a11e0106b552b4ab68e8d63a9c0da23cd288987bdb693a	2	2	\N	["*"]	f	2017-01-16 06:23:02	2017-01-16 06:23:02	2018-01-16 06:23:02
74bdd2b3c67ffc80db786274a5ad106a648f90a12aa2210332f14cfe2bfe923a6c04862b831919a9	2	2	\N	["*"]	f	2017-01-16 07:47:06	2017-01-16 07:47:06	2018-01-16 07:47:06
\.


--
-- Data for Name: oauth_auth_codes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY oauth_auth_codes (id, user_id, client_id, scopes, revoked, expires_at) FROM stdin;
\.


--
-- Data for Name: oauth_clients; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY oauth_clients (id, user_id, name, secret, redirect, personal_access_client, password_client, revoked, created_at, updated_at) FROM stdin;
1	\N	Laravel Personal Access Client	yreOUKpud6rxfQ4VKb2B92nfW08NPMo6XdYUEQMH	http://localhost	t	f	f	2016-12-22 03:14:47	2016-12-22 03:14:47
2	\N	Laravel Password Grant Client	VciAKaQztipCdfNBNsd3e3fNiSuQYy4wZn4vXtyp	http://localhost	f	t	f	2016-12-22 03:14:47	2016-12-22 03:14:47
\.


--
-- Name: oauth_clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('oauth_clients_id_seq', 2, true);


--
-- Data for Name: oauth_personal_access_clients; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY oauth_personal_access_clients (id, client_id, created_at, updated_at) FROM stdin;
1	1	2016-12-22 03:14:47	2016-12-22 03:14:47
\.


--
-- Name: oauth_personal_access_clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('oauth_personal_access_clients_id_seq', 1, true);


--
-- Data for Name: oauth_refresh_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY oauth_refresh_tokens (id, access_token_id, revoked, expires_at) FROM stdin;
62b2fcd84674e30f327f891bbee140deca4a45baacad008aaf256f5a91d113055fc08779e2f5ff14	f74847f8ee87f5ec0beca036d4e5f15e371df72ce63f28a63a59f17c568f482c0c0c237cf41a4790	f	2017-12-22 03:58:19
e9fb59ed99827eb0d7d420d1516de286e4ea78b1120a04ee3ae4c330ee2e8d24ad262ada0b149a38	9e7be266c94b6365538bef7e787a699ad4f07c8d9ca153ff37800a9901cc7aedc7057005aa3a4a20	f	2017-12-22 05:29:24
95dd55b5ef70a7be1e22b54d3ebfb172887f1184072332dddd8e667fe41b2248de1771af42e192e2	7c8ec8fa683738f9a78b6a7d36c97c9f68ad7addbc00f8fc7469e6fd5fb80f7ddad3193dba887144	f	2017-12-23 01:42:46
eb39d396cd2f8779ba3fc59230e7978b215ff3feafc798c82187d8346424b85ac67659473a38dd1c	0ff0227cb8c3a7ba033767839bc0b982de387998362bfa2120c4f2efec5b1c16b28844faeb18376f	f	2017-12-23 01:43:44
d9633ba5e5efb413fba58c22e034670341b19a3a3656558c95bffb6b3286609cd480a8693238907e	10135b7b0257ca0aeb15f419ba4a6c5640cdbc9e3cc10eb53a3217b8972e33a72a59fe875ed9db65	f	2017-12-23 01:43:46
177770b9e09e8432d53825122e9c4617c6c141bb17117419cd4eb258e079e0e870f049a7d64e54c1	65e8bdcf34ba70174bdf442c4877cd94e7fb4dc6f62ac190acd2ebc607778f6d2534c7fbc67b153e	f	2017-12-23 01:54:24
2f66d05bae538e1ff3acc7b4b1d70c38ba0734c3c31301b6ad655ade97df7d9b3f129cc49ad61c5a	f9214cf83bc847161fecb581c4a93bc3da4e71e598b84fbff3f20b2eade1e367940b9535d352b8d8	f	2017-12-23 01:55:19
7cbc8d9ed295e3ad4245f9db8da2aece72c5902803b445ba467e543674b1ce472849de24568b2ee3	05999146a2372220d43dc84bdb3350337388cb04503a00add533c6a07029a09afef30a94558be4da	f	2017-12-23 02:46:40
97bd6afd6d724198d2ee22159ef775bd794b9f36edfce998b04592cedaf0cd152289700057e019e8	2646adcc3c5b88269edaa69df901c5cb59bc0166ec23e5df706dc2893d5bcc1dca5ba36b3f497c3c	f	2017-12-23 06:19:48
ac9f8ba34a8f0fff356eafae1c94a6f3639c0df3e9fe015e40369934c42bcffde31de0e8e9444d1c	0d5531fd6ce558692ac9a257fb9111864627009af0ec935bd51a09a3f0a59f4e06bfeb157850f57c	f	2017-12-23 08:11:45
84cdafe0b4a6208397553dbd483da74826c43d4482116e58ac13fbea51f2b46e711530de13c526cb	f9dd0e275559acf0bddf1075059c0d53850b01d8a9012e6d3a288592e46357041d81f285f5cbb161	f	2018-01-03 02:06:56
632b0285899932a77fe8391a3cf39c89429bb5667093dd76e4af1345e89f47abf06c2fb229a10d2c	d7ad39e34424adef860e5a0c95536a79715ce850c099fa7fc7bc4d73d72fa49e4bda5759fb75b2b9	f	2018-01-03 02:06:57
e07272aa6cd56b3be3353713caa0e603cd093bb7930e5945d45099824adfdefd785f67415a7ab6a7	c2bf53b69042e41c398dd093092eba02c962d91a05ff2cda302bb042f1d3d2eb5b2b6ec87093b003	f	2018-01-03 03:25:08
f7685b0c815ba1dd0a9b24f6fef63b42c36a50f1f86ad0cea863e5b15c19da4204b62909ba4c1dd9	7bfed58888330b1925c59db8369e6d8aaa41713bdcff9fbaeb9b1412196dc4d608f7b2bee67a3dda	f	2018-01-05 02:18:50
194b13af88f9db60b23a8aeae14019ecd7fe5e3b6b576abbbc02d2591323302a5c3887d0f7f8b342	c7c80314a10f822e1ba166fb555da0ef60f4716ef4e838cc2cf0bd86b9cee3f5fc852b4afab8d1fb	f	2018-01-05 02:23:09
781eefa3bfc15ba7600f17dacdec7528ade941ea9b8c593cca146af1dc55397b216fea316dd95783	e9deed25ffe5989db5a6206692235f5004dff362d1a2e24207d12f6bd2c8a3aa9094790648d0c818	f	2018-01-06 01:26:58
5c8f99ead57df685120f78c9a9959eb09dcb590245e0856a44bddbc4b63234150cc2812d0714bfb1	a49c822bbc07622cbdbdcd817f331291e3fc65b5ae6250746f6d0a6dc55365b9f4d6e98efdc91d5f	f	2018-01-09 01:22:44
c97860deec08ca3ff209965ddb949b378abe44866258c2a2b37aac35c6798e77c55215542ba4bf30	7ec212f0b6a41497c2ca71c37cda457c63e96b3d5555161ebac223150c42a3899296f6a273e6f165	f	2018-01-09 01:22:46
a1a8306f5cb2e41d4b6b338ae28ae7298ba27caa9ec529ebbf7338f95e1b84ba76a177e19a09b32e	767426ede19cb0c044ace68db35f7473d5c328dfa6a7cb5fd576a6cd0b0cccc3454725cb4656c703	f	2018-01-10 01:43:28
3c354c103070976c3bf7330053f00a686dedcf0cab3e76b8e735b5b656c92d34f5da10fe824e9ad1	3fb9744baf615e389150f35132f39904765771d03d9d6d244277b9efe89f9ff09a9a854e08585e95	f	2018-01-10 06:30:10
d1b5df83846a7709c7301ff444c9079488650caf7f55362336ac649fc85bb350e7a670a7e84a9a34	277f9aba59fe8a31221401cc7b884c735fbde34830cb097e866e8802088472a01f06f76f2b8ef9f8	f	2018-01-10 06:30:11
4edf965e27eed19cef9310b68b54d05bf3eabfa51dd24c5fb2e83a20fab77e78ce484071044538bc	caa5f1edfb1d90d0ba8d825a202c7ed454f7fc86cd0ffb3ae9d2423975cbb52204d9509a8df2996b	f	2018-01-10 09:43:49
d8a443b2df66ee61a7c42488153113babd51f3e3b9ee59150eb614fdfb66fa25e7d8b6d9aae718b5	4df0065dad6cc38d062edf268f6ee3bd1c3981823b226e431a14c1f1d3062f4621c159c4f25086c8	f	2018-01-10 09:44:06
14b019455fe8ce40763e337f3affda8a92f300b63ef27748275e0f1270e5c54efba1902cf434b925	26a227839f1c87e753534fa23c8a375eb64c906e114724a9c02a39fb125a6f7fb8a213539d9c7796	f	2018-01-11 06:15:49
0f2b03660517c7724bc6de932f9a3ca3c9a0bfa75084ad4b5be3053930bf26288141a3fbd04a0788	e7f56a681d440e63a4acce8390e17cef086bd24bf360145355de6a03d73dc6c61f44d9032487b60e	f	2018-01-11 06:44:18
7781b4558907f34efefde52807f70d70a20a13f4703e2eb653570ed0706cefee80c5e5ba14998192	1bee0f9fefede01db9edada745bd98360a6c6585bddeafcb94c0a8b260d78b76b7e7e0d5d9f42102	f	2018-01-12 01:54:07
fc950cbb633d3be37539d240b7c20c3e5c55aaac27a42b101573b452f6e3913ddcf8110ae24e1685	6eb79e3b6c0f546c84b7a0a90fa9351f8f59c4b610b6eb5c823dec3285af28c282007b6024995988	f	2018-01-12 01:54:49
de8ebb7ba68606cef8c8edd20f2937f0d02af0a9c4db2eace1a0929df01d382f8b8c5c1135fa78c2	545c31049dea1cfb80fc86cd2142de6326e0222b2118370c170abdb20b9278ab07bb454345dffc79	f	2018-01-12 01:57:59
01ca53d1730fcfc491b95f41759a7a6cfb30d9c97335b20b08e8d803c98ac9663082f96ebaa1e599	7813eaf2c6121784e30b6ef933c2978dc53b20ba3fe8b5469bcca931bcc4cefc2890f5b60df37da4	f	2018-01-12 08:07:33
d22ea0bb442cb474853b47483a492b607cea0ccfb47d860bcaae1ed525837ab6cad2f19c7217d2a3	65751a332ff207c7ff70e27ed7b47d1af19d8079961cac7e3d48428ee315620b1214c219566c1b69	f	2018-01-12 08:13:48
ebab50bd1e792e3a7c1b8c719ab679dffb9c5345b055682d7479dbabd17eca2d1d0252b77c8c451a	bdf9621c816703d3c635d61e60b123e0f5543545d47368c1baeb650a0982e95c149b246ee1c8f447	f	2018-01-12 09:36:15
d1f90690c2708452ee3482f80f78489b73dbe1dbd29890177fea4ca2e77e9560ec7fa41135cf016e	a36be68a7259e287900c33b430a5566862cf081f74b615f278aca30af7841892265d53cae7ed129f	f	2018-01-13 06:10:24
26c357b20242b8b64046dbf85765e5d08c99b594b7017082c5047c7eaa84d6b790fe10e9e1995390	73b5316cdfed20adb916615737799ebb786ac344cfafdefbdfbd942178f3f3415709b510f94ffa1e	f	2018-01-13 06:10:53
125d2a78d9e4ef6055e5abf1033eb7afe9b53fcebc6d1a16e5bb6e747393a983b5e5842f3d01ccf8	c05d71e56ab4597f5eaf7dd3c5c0ebbdbe0abd3e0026f792a495056dc08c07192dc71023e53b9285	f	2018-01-13 06:46:02
4c7d966f1b98e0c043c09e6ced2d2351ab23ecfc64ea3f7304bcec2ba66757d1e98722ff02e1e594	3d57edffc3372d91b4eb9e9f946506e39bef0f46c1584aae62cb6a4f5815b3810cfe17fa3a3c27f4	f	2018-01-13 06:46:21
ccf7c01598ae20800f5d2d53fd4831440de7f590ea58ed3928b98dcd29fcda0b6fe18890b69d6241	dbfe20d3b2f08862786525d0718adecc21275e22067698ca34f8f4deaccb0cc3c3012d7a58b579fe	f	2018-01-13 09:46:37
8813eecfa6bf0f75f0a5f36aa91d44da1cc6cf6ab1e7e1fa6d91d34f045bff3e1716cbb170f9e532	2f5cd20a076b340d32aac8d32da87e7a647c09c51b103ade3236c33f491126819365316884622c3c	f	2018-01-13 10:13:14
12d1cd536e9e9ed4862f85fd1d2f8a4a2358bd2dcb9a9cdb4a030b7d7484d0f9dda295649e380ae4	376043483f9138191bf4acac2af3341497a11e0106b552b4ab68e8d63a9c0da23cd288987bdb693a	f	2018-01-16 06:23:02
708fc8d0744e3f9a674a68ff18aca691ebb23c4ed089b22eef884770543639add20e22c437c7e4a1	74bdd2b3c67ffc80db786274a5ad106a648f90a12aa2210332f14cfe2bfe923a6c04862b831919a9	f	2018-01-16 07:47:06
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY password_resets (email, token, created_at) FROM stdin;
andangrdimas@gmail.com	c3aed4cc6e85ce5f371216dff63c8c5a0d5ba2bea6fbb4fb5531d8257f55e757	2016-12-22 03:08:01
\.


--
-- Data for Name: payment; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY payment (id, number, description, client_email, client_id, total_amount, currency_code, details) FROM stdin;
\.


--
-- Data for Name: payment_details; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY payment_details (id, details) FROM stdin;
\.


--
-- Name: payment_details_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('payment_details_id_seq', 1, false);


--
-- Name: payment_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('payment_id_seq', 1, false);


--
-- Data for Name: payment_method; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY payment_method (id, code, name, is_active) FROM stdin;
1	01	Paypal	t
2	02	1stopWalet	t
\.


--
-- Name: payment_method_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('payment_method_id_seq', 1, false);


--
-- Data for Name: payment_token; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY payment_token (hash, details, after_url, target_url, gateway_name) FROM stdin;
\.


--
-- Name: position_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('position_id_seq', 1, false);


--
-- Data for Name: post; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY post (id, created_by_id, title, content, visible, rating, published_at, updated_at) FROM stdin;
\.


--
-- Name: post_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('post_id_seq', 1, false);


--
-- Data for Name: prdposition; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY prdposition (id, product_id, "position", category, subcategory, position_top, created) FROM stdin;
35	59	0	Sofware	Android	0	2016-10-27 16:51:51
36	61	0	4	3	0	2016-11-02 08:51:45
37	62	0	4	3	0	2016-11-02 09:01:18
38	63	0	4	3	0	2016-11-02 09:03:35
39	64	0	4	2	0	2016-11-02 09:11:02
40	66	0	4	2	0	2016-11-02 09:16:27
41	67	0	4	2	0	2016-11-02 09:19:13
42	68	0	4	3	0	2016-11-02 09:24:32
43	69	0	4	2	0	2016-11-02 09:30:14
44	70	0	6	4	0	2016-11-02 10:06:25
45	71	0	\N	\N	0	2016-11-02 10:12:55
46	72	0	6	4	0	2016-11-02 10:14:45
47	73	0	6	4	0	2016-11-02 10:15:38
48	74	0	6	4	0	2016-11-02 10:19:21
49	75	0	3	6	0	2016-11-02 11:24:00
51	77	0	\N	\N	0	2016-11-02 12:59:42
52	78	0	\N	\N	0	2016-11-02 14:18:27
58	122	0	4	3	0	2016-11-03 14:53:14
59	123	0	4	3	0	2016-11-03 15:17:52
80	144	0	5	8	0	2016-12-05 03:47:52
88	152	0	5	8	0	2016-12-07 07:55:00
\.


--
-- Name: prdposition_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('prdposition_id_seq', 89, true);


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY product (id, product_name, package_code, price, description, compatibility, urldownload, status, created, category_id, sub_category_id) FROM stdin;
78	Doctor Strange	342414	50000.00	This is new movie release in the end of 2016	All Platform	http://test.com	ACTIVE	2016-11-02 14:18:27	3	7
62	CC Cleaner	6285	10000.00	This product can help you to mantain your PC	Windows	http://test.com	ACTIVE	2016-11-02 09:01:18	4	3
63	Clean Master	34243	0.00	This product can help you to maintain your mobile android	Android	http://test.com	ACTIVE	2016-11-02 09:03:35	4	3
66	Twitter	34783	0.00	One of the popular social medias in the wolrd	Android	http://test.com	ACTIVE	2016-11-02 09:16:27	4	2
67	Path	48421	0.00	This Social Media is now on trending topics	Android	http://test.com	ACTIVE	2016-11-02 09:19:13	4	2
68	TestDisk	56235	12500.00	This App is for checking your disk and recover some missing data	Windows	http://test.com	ACTIVE	2016-11-02 09:24:32	4	3
70	Maroon 5 - Animals	43245	5000.00	This is single hit from maroon 5.	All Platform	http://test.com	ACTIVE	2016-11-02 10:06:25	6	4
71	Maroon 5 - Don't Wanna Know	52523	5000.00	This is single hit from Maroon 5.	All Platform	http://test.com	ACTIVE	2016-11-02 10:12:55	6	4
123	Oracle VM Virtual Box	31442	1000000.00	Virtual machine issued by Oracle	All Platform	http://test.com	ACTIVE	2016-11-03 15:17:52	\N	\N
72	Ariana Grande - Focus	52355	5000.00	This is single hit from Ariana Grande	All Platform	http://test.com	ACTIVE	2016-11-02 10:14:45	6	4
73	Ariana Grande - Side to Side	23424	5000.00	This is single hit from Ariana Grande	All Platform	http://test.com	ACTIVE	2016-11-02 10:15:38	6	4
74	Coldplay - Up and Up	3252	5000.00	This is single hit from Coldplay	All Platform	http://test.com	ACTIVE	2016-11-02 10:19:21	6	4
122	Whatsapp	425432	12500.00	Whatsapp	Android	https://www.cdn.whatsapp.net/android/2.16.339/WhatsApp.apk	ACTIVE	2016-11-03 14:53:14	4	2
64	Facebook	783235	5000.00	Share your daily activity on Facebook. You can get many frends	Android	http://test.com	ACTIVE	2016-11-02 09:11:02	4	2
61	Chrome	9274	5000.00	This product is free, you can download it without any payment	Windows	https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7BE6A7065D-2617-BF67-B07A-FF5EFD57339C%7D%26lang%3Den%26browser%3D4%26usagestats%3D1%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1%26installdataindex%3Ddefaultbrowser/update2/installers/ChromeSetup.exe	ACTIVE	2016-11-02 08:51:45	4	3
69	Vine	89325	0.00	This is new comer in social media. You can share special moments here.	Android	http://test.com	ACTIVE	2016-11-02 09:30:14	4	2
77	The Alchemist - Paulo Coelho	347824	100000.00	Special Novel from Paulo Coelho	All Platform	http://test.com	ACTIVE	2016-11-02 12:59:42	5	8
152	test book	12300	7000.00	dfhshd	ANDROID	http://test.com	ACTIVE	2016-12-07 07:55:00	5	8
59	Instagram	1234	12000.00	ew	Android		ACTIVE	2016-10-27 16:51:51	4	2
144	test book physcology	12300	7000.00	dfhshd	ANDROID	http://test.com	ACTIVE	2016-12-05 03:47:52	5	9
162	NEW PRODUCT TEST	347824	100000.00	rewrr	All Platform	http://test.com	ACTIVE	2017-01-10 07:49:04	4	2
75	Warkop Reborn - Jangkrik Boss	35252	55000.00	Watch online this movie now.	All Platform	http://test.com	ACTIVE	2016-11-02 11:24:00	3	6
\.


--
-- Name: product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('product_id_seq', 162, true);


--
-- Data for Name: product_image; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY product_image (id, product_id, image_type_id, image, image_url) FROM stdin;
51	67	1	862487307d8a2ac2a44e240f6d66b03c.png	http://172.19.16.156:8000/storage/862487307d8a2ac2a44e240f6d66b03c.png
62	59	1	676cd5becd36dde1e197073ece597908.png	http://172.19.16.156:8000/storage/676cd5becd36dde1e197073ece597908.png
53	69	1	c54815fe8f8ff73aa2257e2efcce205a.png	http://172.19.16.156:8000/storage/c54815fe8f8ff73aa2257e2efcce205a.png
44	77	1	logo.png	http://172.19.16.156:8010/bundles/framework/images/logo.png
48	63	1	01c7c8f25b61cba6535706885bf81e92.png	http://172.19.16.156:8000/storage/01c7c8f25b61cba6535706885bf81e92.png
52	68	1	d93de663ec681676fd567e61596b66c7.png	http://172.19.16.156:8000/storage/d93de663ec681676fd567e61596b66c7.png
50	66	1	95e06d36b99d5a06ec2ac43ec4b9a350.png	http://172.19.16.156:8000/storage/95e06d36b99d5a06ec2ac43ec4b9a350.png
49	64	1	97e96ee38cdb1c0ea06dfd926f950125.png	http://172.19.16.156:8000/storage/97e96ee38cdb1c0ea06dfd926f950125.png
42	122	1	bb1cbd81da84dadd73b71575803e022b.png	http://172.19.16.156:8000/storage/bb1cbd81da84dadd73b71575803e022b.png
61	78	1	331ded7b69a3fa7e1910e38d8eb8bd0f.jpg	http://172.19.16.156:8000/storage/331ded7b69a3fa7e1910e38d8eb8bd0f.jpg
64	144	1	ead50e96e1b5fe1db82af28fc2fde086.png	http://172.19.16.156:8000/storage/ead50e96e1b5fe1db82af28fc2fde086.png
54	70	1	f5286dda1b23b8eedb134d1a563adf43.jpg	http://172.19.16.156:8000/storage/f5286dda1b23b8eedb134d1a563adf43.jpg
55	71	1	49eaaef7bd486f0977c2aa85a16cee24.jpg	http://172.19.16.156:8000/storage/49eaaef7bd486f0977c2aa85a16cee24.jpg
57	73	1	e0f0265f6f1c930d07fb5e1d6894a32b.jpg	http://172.19.16.156:8000/storage/e0f0265f6f1c930d07fb5e1d6894a32b.jpg
56	72	1	9b3f4076f48b15408907255b3c51f4b4.jpg	http://172.19.16.156:8000/storage/9b3f4076f48b15408907255b3c51f4b4.jpg
58	74	1	2763396ed71bdcd9931e1d4b50df891d.jpg	http://172.19.16.156:8000/storage/2763396ed71bdcd9931e1d4b50df891d.jpg
47	62	1	4dee5ea5a767ccf9deb613baf07fdd22.png	http://172.19.16.156:8000/storage/4dee5ea5a767ccf9deb613baf07fdd22.png
78	162	1	4fb9b8af4dedd0d695d7aad9c31170f8.png	http://172.19.16.156:8000/storage/4fb9b8af4dedd0d695d7aad9c31170f8.png
59	75	1	6a6690ac97be5b330a1c2fd16666bc88.jpeg	http://172.19.16.156:8000/storage/6a6690ac97be5b330a1c2fd16666bc88.jpeg
60	77	1	c8ca85e657f995e6b61e0495ad7a09c5.png	http://172.19.16.156:8000/storage/c8ca85e657f995e6b61e0495ad7a09c5.png
71	152	1	2b44c9ac3ed53d9c868d4dabee3bbd2c.png	http://172.19.16.156:8000/storage/2b44c9ac3ed53d9c868d4dabee3bbd2c.png
46	61	1	b489014de56586bb18447b298d6cc949.png	http://172.19.16.156:8000/storage/b489014de56586bb18447b298d6cc949.png
63	123	1	logo.png	http://172.19.16.156:8010/bundles/framework/images/logo.png
43	123	1	9c31b4c5441856aced5431ad332f623f.jpeg	http://172.19.16.156:8010/uploads/images/9c31b4c5441856aced5431ad332f623f.jpeg
\.


--
-- Name: product_image_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('product_image_id_seq', 78, true);


--
-- Data for Name: subcategory; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY subcategory (id, name, target, priority, is_active, created, category_id) FROM stdin;
3	Tools	#aptools	2	t	2016-10-31 10:02:12	4
2	Socials	#apsocial	2	t	2016-10-25 08:41:21	4
4	Pop	#mscpop	1	t	2016-11-02 09:38:45	6
5	Rock	#mscrock	2	t	2016-11-02 09:49:47	6
6	Comedy	#mvcomedy	1	t	2016-11-02 11:22:54	3
7	Fiksi	#mvfiksi	2	t	2016-11-02 11:29:42	3
8	Novel	#bknovel	1	t	2016-11-02 12:54:37	5
9	Psycology	#bkpsycology	2	t	2016-11-02 12:56:47	5
\.


--
-- Name: subcategory_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('subcategory_id_seq', 9, true);


--
-- Data for Name: top_up_voucher; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY top_up_voucher (id, code, price, name, is_active) FROM stdin;
2	TU50	50000.00	Top Up 1 Stop Wallet 50000	t
3	TU100	100000.00	Top Up 1 Stop Wallet 100000	t
1	TU25	25000.00	Top Up 1 Stop Wallet 25000	t
4	TU10	10000.00	Top Up 1 Stop Wallet 10000	t
\.


--
-- Name: top_up_voucher_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('top_up_voucher_id_seq', 1, false);


--
-- Data for Name: trans_payment; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY trans_payment (id, trans_id, detail_id, payment_method, created, urldownload, times_download, max, token, user_id, price, status, url_callback, payment_target, voucher_code) FROM stdin;
48	77	77	01	2017-01-06 06:45:32	\N	\N	\N	EC-7VB19857PF320573D	1	7.52	0	http://172.19.16.47:70/onestop/	01	
50	PAY-6DA38199JJ055532FLBXT6LA	77	01	2017-01-06 06:54:36	\N	\N	\N	EC-67U002221U910412J	1	7.52	0	http://172.19.16.47:70/onestop/	01	
51	PAY-8WD214498F9638204LBXU6BQ	75	01	2017-01-06 08:02:14	\N	\N	\N	EC-15778974F1344992X	2	4.14	1	http://172.19.16.156:8020/#/details/75	01	
52	PAY-4ER52534NY947894SLBXU7AY	75	01	2017-01-06 08:04:20	\N	\N	\N	EC-66G52535BM929392W	2	4.14	1	http://172.19.16.156:8020/#/payment/thankyou/75	01	
53	PAY-78T30235RB5733430LBXVBDI	75	01	2017-01-06 08:08:45	\N	\N	\N	EC-5BL18778JP7255616	2	4.14	1	http://172.19.16.156:8020/#/payment/thankyou/75	01	
54	PAY-4HJ99604NA712964BLBXVC2I	75	01	2017-01-06 08:12:25	\N	\N	\N	EC-34853531V02383227	2	4.14	1	http://172.19.16.156:8020/#/payment/thankyou/75	01	
55	PAY-83777309F54049059LBZOMBQ	75	01	2017-01-09 01:23:17	\N	6	\N	EC-80X67690MA395693C	2	4.14	1	http://172.19.16.156:8020/#/payment/thankyou/75	01	
56	PAY-8V9461053Y777892RLBZT5JA	122	01	2017-01-09 07:41:24	\N	1	\N	EC-2JP741826P840501A	2	0.94	1	http://172.19.16.156:8020/#/payment/thankyou/122	01	
57	PAY-8JT118342F7283738LBZT6RA	122	01	2017-01-09 07:44:04	\N	\N	\N	EC-1M486383S0173421G	2	0.94	-1	http://172.19.16.156:8020/#/payment/thankyou/122	01	
58	PAY-97785427WB451630MLB2DYXI	61	01	2017-01-10 01:43:57	\N	1	\N	EC-98F00421T90002633	2	0.38	1	http://172.19.16.156:8020/#/payment/thankyou/61	01	
59	PAY-8NL932819R014770NLB2EX7I	75	01	2017-01-10 02:50:37	\N	1	\N	EC-2TB1537799172673V	2	4.14	1	http://172.19.16.156:8020/#/payment/thankyou/75	01	
\.


--
-- Name: trans_payment_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('trans_payment_id_seq', 227, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, name, email, password, remember_token, created_at, updated_at, role) FROM stdin;
1	andang r dimas	andangrdimas@gmail.com	$2y$10$CFWZGedgO/NnZzYU6AsMHuH9a0V8i6HlfDo9LGhMKy/bd/Lz6AIcO	0yUPkgZ0n3PVU7VTf4QMBC7qxHiKlTBetvX5333fA2aDimSQ6VJYbYTJSa6t	2016-12-22 03:07:34	2016-12-22 03:07:42	ROLE_USER
11	dsadasd	sada@asfsaf.com	$2y$10$fXCp4D600zjQkz0lfv826ef03PrdgApgzvVW2aUd9cePkmoHuX2Uy	\N	2017-01-12 08:05:16	2017-01-12 08:05:16	\N
2	Admin	admin@gmail.com	$2y$10$w5r37eAAuIUUrUw2uu.qNuzQSwHYMAzGsBay3KW0mgZDeYXesfUyi	3BkTWhG2IMdkMFI7elAz91UBGh8nKkpvQ0W4ZCFWaGs4BsidqPoUprDQajx2	2016-12-23 01:39:20	2017-01-16 06:21:53	ROLE_ADMIN
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 15, true);


--
-- Data for Name: voucher; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY voucher (id, code, name, startdate, enddate, maxclaim, target_type, is_active, disc) FROM stdin;
4	NOVEMBER	Happy November	2016-10-31 17:00:00	2016-11-29 17:00:00	2	1	t	5
7	ISLAMICNEWYEAR	Happy Islamic New Year	2016-11-21 17:00:00	2016-11-23 17:00:00	2	1	t	20
10	DECEMBER	DECEMBER FUN2	2016-11-30 18:05:00	2016-12-30 18:05:00	4	1	t	11
11	NEWYEAR2017	DISCOUNT 30 %	2016-10-31 18:05:00	2016-11-30 12:55:00	1	1	t	30
18	CHRISTMAS122	Christmas 122	2016-11-30 18:05:00	2016-12-30 18:05:00	1	1	t	10
16	CHRISTMAS12DIT	Christmas 12	2016-11-30 18:05:00	2016-12-30 18:05:00	1	1	t	10
5	SEPTEMBER1	Happy September	2016-08-31 17:00:00	2016-09-29 17:00:00	1	1	t	15
3	NEWYEAR1701	DJKFHAS	2016-10-31 18:05:00	2016-11-30 12:55:00	2	1	t	10
\.


--
-- Name: voucher_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('voucher_id_seq', 59, true);


--
-- Data for Name: vouchers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY vouchers (id, created_at, updated_at) FROM stdin;
\.


--
-- Name: vouchers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('vouchers_id_seq', 1, false);


--
-- Name: balance balance_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY balance
    ADD CONSTRAINT balance_pkey PRIMARY KEY (id);


--
-- Name: category category_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY category
    ADD CONSTRAINT category_pkey PRIMARY KEY (id);


--
-- Name: fos_user fos_user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY fos_user
    ADD CONSTRAINT fos_user_pkey PRIMARY KEY (id);


--
-- Name: home_layout home_layout_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY home_layout
    ADD CONSTRAINT home_layout_pkey PRIMARY KEY (id);


--
-- Name: home_product_list home_product_list_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY home_product_list
    ADD CONSTRAINT home_product_list_pkey PRIMARY KEY (id);


--
-- Name: image_type_product image_type_product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY image_type_product
    ADD CONSTRAINT image_type_product_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: oauth_access_tokens oauth_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_access_tokens
    ADD CONSTRAINT oauth_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: oauth_auth_codes oauth_auth_codes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_auth_codes
    ADD CONSTRAINT oauth_auth_codes_pkey PRIMARY KEY (id);


--
-- Name: oauth_clients oauth_clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_clients
    ADD CONSTRAINT oauth_clients_pkey PRIMARY KEY (id);


--
-- Name: oauth_personal_access_clients oauth_personal_access_clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_personal_access_clients
    ADD CONSTRAINT oauth_personal_access_clients_pkey PRIMARY KEY (id);


--
-- Name: oauth_refresh_tokens oauth_refresh_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY oauth_refresh_tokens
    ADD CONSTRAINT oauth_refresh_tokens_pkey PRIMARY KEY (id);


--
-- Name: payment_details payment_details_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_details
    ADD CONSTRAINT payment_details_pkey PRIMARY KEY (id);


--
-- Name: payment_method payment_method_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_method
    ADD CONSTRAINT payment_method_pkey PRIMARY KEY (id);


--
-- Name: payment payment_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment
    ADD CONSTRAINT payment_pkey PRIMARY KEY (id);


--
-- Name: payment_token payment_token_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_token
    ADD CONSTRAINT payment_token_pkey PRIMARY KEY (hash);


--
-- Name: post post_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY post
    ADD CONSTRAINT post_pkey PRIMARY KEY (id);


--
-- Name: prdposition prdposition_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY prdposition
    ADD CONSTRAINT prdposition_pkey PRIMARY KEY (id);


--
-- Name: product_image product_image_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product_image
    ADD CONSTRAINT product_image_pkey PRIMARY KEY (id);


--
-- Name: product product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_pkey PRIMARY KEY (id);


--
-- Name: subcategory subcategory_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY subcategory
    ADD CONSTRAINT subcategory_pkey PRIMARY KEY (id);


--
-- Name: top_up_voucher top_up_voucher_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY top_up_voucher
    ADD CONSTRAINT top_up_voucher_pkey PRIMARY KEY (id);


--
-- Name: trans_payment trans_payment_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY trans_payment
    ADD CONSTRAINT trans_payment_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: voucher voucher_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY voucher
    ADD CONSTRAINT voucher_pkey PRIMARY KEY (id);


--
-- Name: vouchers vouchers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY vouchers
    ADD CONSTRAINT vouchers_pkey PRIMARY KEY (id);


--
-- Name: idx_45985d8e4584665a; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_45985d8e4584665a ON prdposition USING btree (product_id);


--
-- Name: idx_5a8a6c8db03a8386; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a8a6c8db03a8386 ON post USING btree (created_by_id);


--
-- Name: idx_64617f034584665a; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_64617f034584665a ON product_image USING btree (product_id);


--
-- Name: idx_c1f02ba94584665a; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_c1f02ba94584665a ON home_product_list USING btree (product_id);


--
-- Name: idx_c1f02ba98c22aa1a; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_c1f02ba98c22aa1a ON home_product_list USING btree (layout_id);


--
-- Name: idx_d34a04ad12469de2; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_d34a04ad12469de2 ON product USING btree (category_id);


--
-- Name: idx_d34a04adf7bfe87c; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_d34a04adf7bfe87c ON product USING btree (sub_category_id);


--
-- Name: idx_ddca44812469de2; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_ddca44812469de2 ON subcategory USING btree (category_id);


--
-- Name: oauth_access_tokens_user_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX oauth_access_tokens_user_id_index ON oauth_access_tokens USING btree (user_id);


--
-- Name: oauth_clients_user_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX oauth_clients_user_id_index ON oauth_clients USING btree (user_id);


--
-- Name: oauth_personal_access_clients_client_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX oauth_personal_access_clients_client_id_index ON oauth_personal_access_clients USING btree (client_id);


--
-- Name: oauth_refresh_tokens_access_token_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX oauth_refresh_tokens_access_token_id_index ON oauth_refresh_tokens USING btree (access_token_id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: password_resets_token_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_token_index ON password_resets USING btree (token);


--
-- Name: uniq_957a6479c05fb297; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_957a6479c05fb297 ON fos_user USING btree (confirmation_token);


--
-- Name: prdposition fk_45985d8e4584665a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY prdposition
    ADD CONSTRAINT fk_45985d8e4584665a FOREIGN KEY (product_id) REFERENCES product(id);


--
-- Name: post fk_5a8a6c8db03a8386; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY post
    ADD CONSTRAINT fk_5a8a6c8db03a8386 FOREIGN KEY (created_by_id) REFERENCES fos_user(id);


--
-- Name: product_image fk_64617f034584665a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product_image
    ADD CONSTRAINT fk_64617f034584665a FOREIGN KEY (product_id) REFERENCES product(id);


--
-- Name: home_product_list fk_c1f02ba94584665a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY home_product_list
    ADD CONSTRAINT fk_c1f02ba94584665a FOREIGN KEY (product_id) REFERENCES product(id);


--
-- Name: home_product_list fk_c1f02ba98c22aa1a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY home_product_list
    ADD CONSTRAINT fk_c1f02ba98c22aa1a FOREIGN KEY (layout_id) REFERENCES home_layout(id);


--
-- Name: product fk_d34a04ad12469de2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT fk_d34a04ad12469de2 FOREIGN KEY (category_id) REFERENCES category(id);


--
-- Name: product fk_d34a04adf7bfe87c; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product
    ADD CONSTRAINT fk_d34a04adf7bfe87c FOREIGN KEY (sub_category_id) REFERENCES subcategory(id);


--
-- Name: subcategory fk_ddca44812469de2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY subcategory
    ADD CONSTRAINT fk_ddca44812469de2 FOREIGN KEY (category_id) REFERENCES category(id);


--
-- PostgreSQL database dump complete
--

