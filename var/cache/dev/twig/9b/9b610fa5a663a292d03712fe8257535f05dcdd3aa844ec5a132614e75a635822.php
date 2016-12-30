<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4ac6419b079e2ed2ee3f84f50dc6a52855fae56fd63fc16b614763b3e4bf5b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3854e247cd771fcc994197a5061376ced4a4c8f22ad2d1207106528300df3958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3854e247cd771fcc994197a5061376ced4a4c8f22ad2d1207106528300df3958->enter($__internal_3854e247cd771fcc994197a5061376ced4a4c8f22ad2d1207106528300df3958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_56f5215fc472ad506b98725bf525169e9888b1bb4ee1a927eee9fe5a4f29b5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f5215fc472ad506b98725bf525169e9888b1bb4ee1a927eee9fe5a4f29b5f9->enter($__internal_56f5215fc472ad506b98725bf525169e9888b1bb4ee1a927eee9fe5a4f29b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3854e247cd771fcc994197a5061376ced4a4c8f22ad2d1207106528300df3958->leave($__internal_3854e247cd771fcc994197a5061376ced4a4c8f22ad2d1207106528300df3958_prof);

        
        $__internal_56f5215fc472ad506b98725bf525169e9888b1bb4ee1a927eee9fe5a4f29b5f9->leave($__internal_56f5215fc472ad506b98725bf525169e9888b1bb4ee1a927eee9fe5a4f29b5f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
