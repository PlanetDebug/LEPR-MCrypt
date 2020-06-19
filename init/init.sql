CREATE DATABASE app_db;

CREATE TABLE person (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(13),
    email VARCHAR(65),
    query_id SERIAL REFERENCES query_type(id) UNIQUE (query_id),
    call_stats_id SERIAL REFERENCES call_stats(id) UNIQUE (call_stats_id),
    campaign_id SERIAL REFERENCES campaign(id) UNIQUE (campaign_id)
)

CREATE TABLE query_type (
    id SERIAL PRIMARY KEY,
    title VARCHAR(30) NOT NULL
)

CREATE TABLE call_stats (
    id SERIAL PRIMARY KEY,
    call_length TIME NOT NULL,
    recording_url TEXT NOT NULL
)

CREATE TABLE campaign (
    id SERIAL PRIMARY KEY, 
    campaign_name VARCHAR(50) NOT NULL,
    campaign_desc TEXT NOT NULL 
)

