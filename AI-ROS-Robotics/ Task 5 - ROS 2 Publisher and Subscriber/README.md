# Task 5 - ROS 2 Publisher and Subscriber

## Objective
Create a ROS 2 Publisher and Subscriber that communicate by sending and receiving a custom message instead of the default "Hello World".

## Environment
- Operating System: Ubuntu 22.04 LTS
- ROS Distribution: Humble
- Programming Language: Python

---

## Steps

### 1. Source the ROS 2 environment

```bash
source /opt/ros/humble/setup.bash
```

### 2. Open the project folder

```bash
cd ~/publisher_subscriber
```

### 3. Run the Publisher

```bash
python3 talker.py
```

### 4. Run the Subscriber

```bash
python3 listener.py
```

---

## Result

The publisher continuously sends the message:

```
Can you hear me?
```

The subscriber successfully receives and displays the same message, confirming successful communication between the two ROS 2 nodes.

---

## Screenshots

### Publisher (Talker)

![Talker](screenshots/talker_Photo.png)

### Subscriber (Listener)

![Listener](screenshots/listener_Photo.png)
