import rclpy
from rclpy.node import Node
from geometry_msgs.msg import Twist
import time

class TurtleSquare(Node):

    def __init__(self):
        super().__init__('turtle_square')
        self.publisher = self.create_publisher(Twist, '/turtle1/cmd_vel', 10)

    def move(self):
        msg = Twist()

        for i in range(4):

            msg.linear.x = 2.0
            msg.angular.z = 0.0
            self.publisher.publish(msg)
            time.sleep(2)

            msg.linear.x = 0.0
            msg.angular.z = 1.57
            self.publisher.publish(msg)
            time.sleep(1)

        msg.linear.x = 0.0
        msg.angular.z = 0.0
        self.publisher.publish(msg)

def main(args=None):
    rclpy.init(args=args)

    node = TurtleSquare()

    node.move()

    node.destroy_node()
    rclpy.shutdown()

if __name__ == '__main__':
    main()
