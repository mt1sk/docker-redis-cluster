FROM redis

ADD sentinel.conf /etc/redis/sentinel.conf
ADD notify.sh /var/redis/notify.sh
ADD reconfig.sh /var/redis/reconfig.sh
RUN chown redis:redis /etc/redis/sentinel.conf \
    && chmod +x /var/redis/notify.sh \
    && chmod +x /var/redis/reconfig.sh

#COPY $PHP_INI_DIR/custom.d/custom.ini $PHP_INI_DIR/conf.d/
