A simple http notification system, 

To start the publisher server use php artisan serve

Endpoints created include

1. /topics (GET REQUEST) - To retrieve all topics
2. /topics (POST REQUEST) - To add new topic
    * parameters - {"name" : topic-name }
3. /messages (GET REQUEST) - To retrieve all messages
4. /subscribe/{topic-id} (POST REQUEST) - To subscribe to a topic
    * parameters - {"url" : url }
5. publish/{topic-id} (POST REQUEST) - To publish messages 
    * parameters - {"message" : message }
