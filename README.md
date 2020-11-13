# 軽量動画配信サービス（デモ）

![aws-movies_202010080218](https://user-images.githubusercontent.com/60908658/95427684-eb1ee100-0982-11eb-90d5-043a85cc0391.gif)

## 概要

　受託開発案件のサポートとして依頼を受け、提示された仕様書を元に製作した軽量動画配信サービスのデモサイトになります。内容は、外出自粛で来訪者数が低迷する施設向けに提供を想定したサービスで、施設内の観覧イメージ映像を掲載して集客化を図るものです。利用者がストレスなく多くの映像を閲覧できるよう、AWSで動画を軽量に変換した動画を配信することを想定したものとなります。

## URL

[https://sample-n-tech.herokuapp.com/](https://sample-n-tech.herokuapp.com/)

ログインボタンを押していただくと、テストユーザーにてご利用が可能です。

## 特徴

- デモ用の各動画は、S3に動画を保存することでElasticTranscoderがHLS形式へと自動変換する仕組みをを構築し、出力されたものを導入例として掲載しました。
- Safari以外のブラウザでも再生可能とするため、ライブラリ(Video.js)を活用して汎用化しました。

## 使用技術

- PHP 7.4.11
- Laravel 6.18.40
- Bootstrap
- AWS (ElasticTranscoder, S3, Lambda)
- Docker/docker-compose
- heroku
- Nginx
- PostgreSQL
- Git, GitHub

## 動画変換の構成図

![動画変換の構成図](https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/aws-movies_202010080453.png)


## 制作に関して

- 製作の期限が４日間と短く、ElasticTranscoderや他ブラウザでの汎用性などゼロから調べながらの対応でしたが、大変勉強になる経験でした。


## 注釈

- 企業情報が入っているソースコードは除いております。

- 動画は、NHKクリエイティブ・ライブラリー様の素材を活用させていただきました。

## 制作期間

　４日間
