FROM ruby:2.7

RUN mkdir /var/www
COPY main.rb /var/www

# RUNでは行けない理由としては
# RUNはビルド時にコンテナ内で実行される(docker build時)
# CMDは完成したイメージからコンテナを作成する時に実行される(docker start時、docker run時)
CMD ["ruby", "/var/www/main.rb"]
