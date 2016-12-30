<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4d918c0a04a10b6a8b1743320b99874c8329c0cff4e71098588f7e5a8989961b extends Twig_Template
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
        $__internal_84d7c9bd7b6f925b92b9e3b4dfdbae0f7265c1e61075fa13c58a5b3801ecf755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d7c9bd7b6f925b92b9e3b4dfdbae0f7265c1e61075fa13c58a5b3801ecf755->enter($__internal_84d7c9bd7b6f925b92b9e3b4dfdbae0f7265c1e61075fa13c58a5b3801ecf755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f195ea51b553e8fe68fb8ffcced1ccde35e9cedfdbf6b82a6fd33e99329cde36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f195ea51b553e8fe68fb8ffcced1ccde35e9cedfdbf6b82a6fd33e99329cde36->enter($__internal_f195ea51b553e8fe68fb8ffcced1ccde35e9cedfdbf6b82a6fd33e99329cde36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_84d7c9bd7b6f925b92b9e3b4dfdbae0f7265c1e61075fa13c58a5b3801ecf755->leave($__internal_84d7c9bd7b6f925b92b9e3b4dfdbae0f7265c1e61075fa13c58a5b3801ecf755_prof);

        
        $__internal_f195ea51b553e8fe68fb8ffcced1ccde35e9cedfdbf6b82a6fd33e99329cde36->leave($__internal_f195ea51b553e8fe68fb8ffcced1ccde35e9cedfdbf6b82a6fd33e99329cde36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
