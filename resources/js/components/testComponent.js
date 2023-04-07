import React from "react";
import {
    Container,
    Row,
    Col,
    Card,
    CardImg,
    CardBody,
    CardTitle,
    CardSubtitle,
    Button,
} from "reactstrap";
import ReactDOM from "react-dom";

function testComponent() {
    return (
        <Container>
            <h1 className="mt-5">Welcome to our Apparel Store!</h1>
            <Row className="mt-5">
                <Col md="4">
                    <Card>
                        <CardImg
                            top
                            width="100%"
                            src="/images/men-shirt.jpg"
                            alt="Men's Shirt"
                        />
                        <CardBody>
                            <CardTitle>Men's Shirts</CardTitle>
                            <CardSubtitle>Shop Now</CardSubtitle>
                            <Button className="mt-3" color="primary">
                                View Collection
                            </Button>
                        </CardBody>
                    </Card>
                </Col>
                <Col md="4">
                    <Card>
                        <CardImg
                            top
                            width="100%"
                            src="/images/women-dress.jpg"
                            alt="Women's Dress"
                        />
                        <CardBody>
                            <CardTitle>Women's Dresses</CardTitle>
                            <CardSubtitle>Shop Now</CardSubtitle>
                            <Button className="mt-3" color="primary">
                                View Collection
                            </Button>
                        </CardBody>
                    </Card>
                </Col>
                <Col md="4">
                    <Card>
                        <CardImg
                            top
                            width="100%"
                            src="/images/kids-tshirt.jpg"
                            alt="Kid's T-Shirt"
                        />
                        <CardBody>
                            <CardTitle>Kid's T-Shirts</CardTitle>
                            <CardSubtitle>Shop Now</CardSubtitle>
                            <Button className="mt-3" color="primary">
                                View Collection
                            </Button>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </Container>
    );
}

export default testComponent;

if (document.getElementById("testComponent")) {
    ReactDOM.render(
        <testComponent />,
        document.getElementById("testComponent")
    );
}
