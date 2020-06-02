# Create image based on the official Node 6 image from dockerhub
FROM nginx:alpine

# Clean nginx
RUN rm -rf /usr/share/nginx/html/*

# Copy dist
ADD . /usr/share/nginx/html
COPY nginx.conf /etc/nginx/nginx.conf

WORKDIR /usr/share/nginx/html

# Permission
RUN chown root /usr/share/nginx/html/*
RUN chmod 755 /usr/share/nginx/html/*

# Expose port
EXPOSE 2000

# Start
CMD ["nginx", "-g", "daemon off;"]
