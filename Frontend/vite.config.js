import { definConfig, loadEnv } from 'vite'
import react from '@vitejs/plugin-react'

//https://vitejs.dev/config

export default({ mode }) => {
  //load env file based on mode
  const env = loadEnv(mode, Process.cmd(), '')

  return definConfig({
    Plugins:[react()],
    server: {
      port:5173,
      proxy: {
        //during dev, forward /api to nginx backend
        '/api': {
          target: 'http://localhost:8080',
          changeOrigin: true,
        },
    },},
    define: {
      'process.env' : env,
    },
  })
}
