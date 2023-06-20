FROM httpd:alpine3.17

LABEL Maintenair="Yvan FOUCHER" \
    TP="3" \
    Version="1.8"

ENV SCHOOL="IUT" \
    LEVEL="1.8"

COPY ./dayScheduler/ /usr/local/apache2/htdocs/

WORKDIR /usr/local/apache2/htdocs/

RUN sed -i 's/Work Day Scheduler/Yvan FOUCHER/g' index.html

HEALTHCHECK --interval=60s --timeout=1s --start-period=5s --retries=3 CMD wget --no-verbose --tries=1 --spider http://localhost/ || exit 1

EXPOSE 80
