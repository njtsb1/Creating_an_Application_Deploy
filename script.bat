echo "Creating the images....."

docker build -t nivaldobeirao/project-backend:1.0 backend/.
docker build -t nivaldobeirao/project-database:1.0 database/.

echo "Pushing images...."

docker push nivaldobeirao/project-backend:1.0 backend/.
docker push nivaldobeirao/project-database:1.0 database/.

echo "Creating services in the Kubernetes cluster..."

kubectl apply -f ./services.yml

echo "CCreating the deployments..."

kubectl apply -f ./deployments.yml