<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7fcb09704cd3a17c842e93b7ba81e57e9f3b39f6d0a540e01063232ecf152a50 extends Twig_Template
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
        $__internal_2ba505d7e85f48199de4c9c8305504c2acd5b186021e867aeafca55ebcfc72e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba505d7e85f48199de4c9c8305504c2acd5b186021e867aeafca55ebcfc72e2->enter($__internal_2ba505d7e85f48199de4c9c8305504c2acd5b186021e867aeafca55ebcfc72e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5442d37daa2e93e0cb35af2f73d90b114d748441adfd7897d7f1b135fac7c26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5442d37daa2e93e0cb35af2f73d90b114d748441adfd7897d7f1b135fac7c26a->enter($__internal_5442d37daa2e93e0cb35af2f73d90b114d748441adfd7897d7f1b135fac7c26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2ba505d7e85f48199de4c9c8305504c2acd5b186021e867aeafca55ebcfc72e2->leave($__internal_2ba505d7e85f48199de4c9c8305504c2acd5b186021e867aeafca55ebcfc72e2_prof);

        
        $__internal_5442d37daa2e93e0cb35af2f73d90b114d748441adfd7897d7f1b135fac7c26a->leave($__internal_5442d37daa2e93e0cb35af2f73d90b114d748441adfd7897d7f1b135fac7c26a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
